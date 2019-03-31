<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class FindController extends Controller
{
    public function show(Request $request)
    {
        //print_r($request['name']);
        $order=Order::where('vin',$request['name'])->get();

        return view('find', compact('order'));
    }
}
