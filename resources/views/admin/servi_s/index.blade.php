@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Все работы</div>
                    <a type="button" class="btn btn-default" href="{{ route('service.create')}}">Добавить</a>
                    <div class="panel-body">
                        @if($service->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Категория работ</th>
                                    <th>Описание</th>
                                    <th>Цена</th>
                                    <th>Затраченое время</th>
                                </tr>
                                @foreach($service as $si)
                                    <tr>
                                        <td>{{ $si->id }}</td>
                                        <td>{{ $si->name }}</td>
                                        <td>{{ $si->category->name }}</td>
                                        <td>{{ $si->description }}</td>
                                        <td>{{ $si->price }}</td>
                                        <td>{{ $si->worktime}}</td>
                                        <td>
                                            <form action="{{ route('service.destroy', $si->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('service.edit', $si->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            Следует создать новое
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection