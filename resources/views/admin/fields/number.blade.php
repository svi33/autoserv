@extends('admin.fields.main')

@section('field')
    <input type="number" name="{{ $field }}" value="{{ old($field, (isset($entity) ? $entity->$field : '')) }}" class="form-control">
@overwrite
