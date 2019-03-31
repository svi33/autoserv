<?php

namespace App\Http\Controllers;

use App\Order;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

//use Carbon\Carbon;


class OrderController extends Controller
{
    public function index()
    {
        $order= Order::paginate(10);
        return view('admin.orders.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $services = Service::all();
        $services = Service::all();
        return view('admin.orders.form', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'contact' => 'required',
            'model' => 'required',
            'service_id' => 'required|integer',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $entity = $order;
        $services = Service::all();
        return view('admin.orders.ed_form', compact('services', 'entity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $this->validate($request, [
            'contact' => 'required',
            'model' => 'required',
            'service_id' => 'required|integer',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Calendar()
    {
        $orders= Order::all();
//        $st=Carbon::now();
//        $f=$st->addHours(1);
//        $T="Техработы";
//        $events=array(array($T, $st,$f));// для определения структуры и блокировки текущего часа
//        //if ($order!=null)
        foreach($orders as $II)
        {
            $T=$II->service->name;
           // $T=$T.II->contact;
            $st=$II->start;
            $f=$II->fin;
            $events[] = [
                'title' => $T,
                'start_date' => $st,
                'end_date'=> $f
            ];
        }

//        return redirect()->action('EventController@index', ['events' => $events]);
        return redirect()->route('events.index',  ['events' => $events] );
    }


}
