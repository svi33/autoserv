@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Все заказы</div>
                   <a type="button" class="btn btn-default" href="{{ route('orders.create')}}">Add new</a>
                    <div class="panel-body">
                        @if($order->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Связь</th>
                                    <th>Модель</th>
                                    <th>Описание</th>
                                    <th>Вид работ</th>
                                    <th>VIN</th>
                                    <th>Сумма</th>
                                    <th>Старт</th>
                                    <th>Финиш</th>
                                </tr>
                                @foreach($order as $si)
                                    <tr>
                                        <td>{{ $si->id }}</td>
                                        <td>{{ $si->contact }}</td>
                                        <td>{{ $si->model }}</td>
                                        <td>{{ $si->description }}</td>
                                        <td>{{ $si->service->name }}</td>
                                        <td>{{ $si->vin }}</td>
                                        <td>{{ $si->summ }}</td>
                                        <td>{{ $si->start}}</td>
                                        <td>{{ $si->fin}}</td>

                                        <td>
                                            <form action="{{ route('orders.destroy', $si->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('orders.edit', $si->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                           <a type="button" class="btn btn-default" href="{{ route('Calendar') }}">Расписание</a>
                            {{$order->links()}}
                        @else
                            Нет заказов
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection