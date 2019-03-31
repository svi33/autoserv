
@extends('admin.fields.main')

@section('field')
	{{ Form::datetime($field, old($field, (isset($entity) ? $entity->$field :Carbon\Carbon::now())), ['class' => 'form-control']) }}
@overwrite
