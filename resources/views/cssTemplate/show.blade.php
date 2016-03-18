@extends('app')

@section('content')
    <div class="form-group">
    <h1>Name: {!! $csstemplate->name !!}</h1>
    </div>

    <div class="form-group">
    <h3>Description:</h3>
    <article>{!! $csstemplate->description !!}</article>
    </div>

    <div class="form-group">
        <h3>Content:</h3>
        <article>{!! $csstemplate->content !!}</article>
    </div>

    <div class="form-group">
        <h3>Active:</h3>
        <article>{!! $csstemplate->active !!}</article>
    </div>

    <div class="form-group">
        <h3>Created At:</h3>
        <article>{!! $csstemplate->created_at !!}</article>
    </div>

    <div class="form-group">
        <h3>Created By:</h3>
        <article>{!! $csstemplate->created_by !!}</article>
    </div>
    @if($csstemplate->modified_by != null)
    <div class="form-group">
        <h3>Updated At:</h3>
        <article>{!! $csstemplate->updated_at !!}</article>
    </div>

    <div class="form-group">
        <h3>Modified By:</h3>
        <article>{!! $csstemplate->modified_by !!}</article>
        </div>
    @endif
    <div class="form-group">
        <a href="{{action('cssTemplatesController@edit', [$csstemplate->id])}}" class="btn btn-default form-control">Edit CSS Template</a>
    </div>

    <div class="form-group">
        {!! Form::open([ 'method'  => 'delete', 'route' => [ 'csstemplates.destroy', $csstemplate->id ] ]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
        {!! Form::close() !!}
    </div>

@stop