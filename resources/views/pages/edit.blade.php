@extends('app')

@section('content')
    <h1>Edit: {!! $page->name !!}</h1>

    {!! Form::model($page, ['method' => 'PATCH', 'action' => ['PagesController@update', $page->id]]) !!}
        @include('pages.form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}

        @include('errors.list')

    @stop