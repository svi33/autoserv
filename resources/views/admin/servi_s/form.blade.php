@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Создать новый</div>
                    @else
                        <div class="panel-heading">Редактировать</div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('service.store') }}@else{{ route('service.update', $entity->id) }}@endif" method="post">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">
                                @include('admin.fields.text', ['field' => 'name', 'name' => 'Name'])
                                @include('admin.fields.number', ['field' => 'price', 'name' => 'Price'])
                                @include('admin.fields.number', ['field' => 'worktime', 'name' => 'Worktime'])
                                @include('admin.fields.textarea', ['field' => 'description', 'name' => 'description', 'rows' => 5])
                                @include('admin.fields.select', ['field' => 'category_id', 'name' => 'Category', 'options' => $categories])
                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection