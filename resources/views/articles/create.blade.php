@extends('app')

@section('content')

    <h1>Create a New Article</h1>

    {!! Form::open(['url' => 'articles']) !!}
    @include('articles.form', ['submitButtonText' => 'Create Article'])
    {!! Form::close() !!}

    @include('errors.list')

@stop