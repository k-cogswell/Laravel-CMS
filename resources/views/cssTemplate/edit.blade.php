@extends('app')

@section('content')
    <h1>Edit: {!! $csstemplate->name !!}</h1>

    {!! Form::model($csstemplate, ['method' => 'PATCH', 'action' => ['cssTemplatesController@update', $csstemplate->id]]) !!}
    @include('cssTemplate.form', ['submitButtonText' => 'Edit CSS Template'])
    {!! Form::close() !!}

    @include('errors.list')

@stop