@extends('app')

@section('content')

<h1>Create a New Page</h1>

    {!! Form::open(['url' => 'pages']) !!}
        @include('pages.form', ['submitButtonText' => 'Create Page'])
    {!! Form::close() !!}

        @include('errors.list')

    @stop