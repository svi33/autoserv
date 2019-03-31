@extends('admin.fields.main')

@section('field')
	{{ $entity->$field }}
@overwrite
