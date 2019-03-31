<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service= Service::all();
        return view('admin.servi_s.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $services = Service::all();
        $categories = Category::all();
        return view('admin.servi_s.form', compact('categories'));
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
            'name' => 'required',
            'category_id' => 'required|integer',
            'worktime' => 'required|integer',
        ]);

        Service::create($request->all());

        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Service $ser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $entity = $service;
        $categories = Category::all();
        return view('admin.servi_s.form', compact('categories', 'entity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required|integer',
            'worktime' => 'required|integer',
        ]);

        $service->update($request->all());

        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index');
    }
}
