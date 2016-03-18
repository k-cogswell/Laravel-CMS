@extends('app')

@section('content')

    <h1>Create a New Content Area</h1>

    {!! Form::open(['url' => 'contentareas']) !!}
    @include('content.form', ['submitButtonText' => 'Create Content Area'])
    {!! Form::close() !!}

    @include('errors.list')

@stop