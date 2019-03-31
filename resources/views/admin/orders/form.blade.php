@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Create new orders</div>
                    @else
                        <div class="panel-heading">Edit orders</div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('orders.store') }}@else{{ route('order.updates', $entity->id) }}@endif" method="post">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">
                                @include('admin.fields.text', ['field' => 'contact', 'name' => 'Contact'])
                                @include('admin.fields.text', ['field' => 'model', 'name' => 'Model'])
                                @include('admin.fields.text', ['field' => 'description', 'name' => 'description'])
                                @include('admin.fields.select', ['field' => 'service_id', 'name' => 'Service', 'options' => $services])
                                @include('admin.fields.text', ['field' => 'vin', 'name' => 'VIN'])
                                @include('admin.fields.number', ['field' => 'summ', 'name' => 'Sum'])
                                @include('admin.fields.date', ['field' => 'start', 'name' => 'TimeStart'])
                                @include('admin.fields.date', ['field' => 'fin', 'name' => 'TimeFin'])
                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection