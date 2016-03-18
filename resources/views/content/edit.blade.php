@extends('app')

@section('content')
    <h1>Edit: {!! $contentarea->name !!}</h1>

    {!! Form::model($contentarea, ['method' => 'PATCH', 'action' => ['ContentAreasController@update', $contentarea->id]]) !!}
    @include('content.form', ['submitButtonText' => 'Edit Content Area'])
    {!! Form::close() !!}

    @include('errors.list')

@stop