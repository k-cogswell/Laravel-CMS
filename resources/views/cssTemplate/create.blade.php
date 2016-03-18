@extends('app')

@section('content')

    <h1>Create a New CSS Template</h1>

    {!! Form::open(['url' => 'csstemplates']) !!}
    @include('cssTemplate.form', ['submitButtonText' => 'Create CSS Template'])
    {!! Form::close() !!}

    @include('errors.list')

@stop