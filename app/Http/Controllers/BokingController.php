<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Service;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Prophecy\Doubler\Generator\Node\ArgumentNode;

class BokingController extends Controller
{
    public function show(Service $service, $id)
    {
        $start_work=9; $fin_work=18;
        $res = Service::where('id', $id)->first()->toArray();
        $Box= Category::where('id',$res['category_id'])->first();
//        print_r($Box->box);
//        die;
      //  $ord_dat=DB::table('order')->select('start','fin');
        $title_days=array();
        for($i=0; $i <=14;$i++) {
            $day = Carbon::now()->addDays($i);
            $title_days[] = $day;
        }
        $schedule_days=array();

        foreach($title_days as $day)
        {
            $times=array();
            for($j=$start_work;$j<$fin_work;$j++)
            {
                date_time_set($day, 0+$j,0, 0);
                $t_d_h=$day->toDate()->format('Y-m-d H:i:s');
                if ($day->format('N') == 7 || $day->format('N') == 6){
                    $times[$j]=array($t_d_h, -1);
                }
                else if(DB::table('orders')->select('start','fin')->where('start','<=',$day->toDate()->format('Y-m-d H:i:s'))->where('fin','>=',$day->toDate()->format('Y-m-d H:i:s'))->count()>=$Box->box){
                    $times[$j]=array($t_d_h, 0);
                }
                else if ($day->toDate()->format('Y-m-d H:i:s') <= date('Y-m-d H:i:s')){
                    $times[$j]=array($t_d_h, 0);
                }
                else if ($day->toDate()->format('Y-m-d H:i:s') <= date('Y-m-d H:i:s')){
                    $times[$j]=array($t_d_h, 0);
                }
                else {
                    $times[$j]=array($t_d_h, 1); //$X=categories->box - DB::table('orders')->select('start','fin')->where('start','<=',$day->toDate()->format('Y-m-d H:i:s'))->where('fin','>=',$day->toDate()->format('Y-m-d H:i:s'))->count();
                }

            }
            $schedule_days[]=$times;
        }
        $worktime= $res['worktime'];
        for($i=0;$i<14;$i++)
        {
            for($j=$start_work;$j<$fin_work;$j++)
            {
                if($schedule_days[$i][$j][1]==1)
                {
                    if ($j+$worktime>$fin_work || $schedule_days[$i][$j+$worktime-1][1]==2){
                        $schedule_days[$i][$j][1]=0;
                    }
                }
            }
        }

        $service_id=$id;

        return view('list_dat', compact('schedule_days', 'service_id', 'worktime'));
    }

    public function store (Request $request)
    {

//        $res = Service::where('id', $request->service_id)->first()->toArray();

        $serv=Service::where('id',$request->service_id)->first();
//        print_r($serv);
//        die;
        $order = new Order();
        $order->service_id=$serv->id;
        $order->contact=$request->contact;
        $order->model=$request->model;
        $order->vin=$request->vin;
        $order->start=$request->data;
        $order->description=' ';
        $order->summ=$serv->price;
        $order->fin=date('Y-m-d H:i:s',strtotime($request->data ." + " . $serv->worktime . " hour"));

        $order->save();

        if (!$order->id){
            return response(1);
        }
        return response(0);
    }

    public function all_services()
    {
//        $services=Service::all();
        $categories=Category::all();

        return view('services', compact('services', 'categories'));
    }
}
