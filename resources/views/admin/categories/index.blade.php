@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Категории работ</div>
                    <div class="panel-body">
                        <a type="button" class="btn btn-default" href="{{ route('categories.create')}}">Добавить</a>
                        @if($categories->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Одновременно обслуживаются</th>
                                    <th>Действия</th>
                                </tr>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name}}</td>
                                        <td>{{ $category->box }}</td>
                                        <td>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('categories.edit', $category->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            Пусто ... Может создать новую?
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection