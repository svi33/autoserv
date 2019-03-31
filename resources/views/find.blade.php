@extends('layouts/app')
@section('css')
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/dat_style.css')}}"/>--}}
@endsection
@section('content')
<div class="panel-body">
    @if($order->count() > 0)
        <table class="table">
            <tr>
                <th>Contact</th>
                <th>Model</th>
                <th>Description</th>
                <th>Service </th>
                <th>VIN</th>
                <th>Summ</th>
                <th>Start</th>
                <th>Fin</th>
            </tr>

            @foreach($order as $si)
                <tr>
                    <td>{{ $si->contact }}</td>
                    <td>{{ $si->model }}</td>
                    <td>{{ $si->description }}</td>
                    <td>{{ $si->service->name }}</td>
                    <td>{{ $si->vin }}</td>
                    <td>{{ $si->summ }}</td>
                    <td>{{ $si->start}}</td>
                    <td>{{ $si->start}}</td>
                </tr>
            @endforeach
        </table>

    @else
        Ранее услугами автосервиса не пользовались
    @endif
</div>
@endsection