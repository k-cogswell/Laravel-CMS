@extends('app')

@section('content')
    <div class="form-group">
    <h1>Name: {!! $contentarea->name !!}</h1>
    </div>
    
    <div class="form-group">
    <h3>Alias: {!! $contentarea->alias !!}</h3>
    </div>

    <div class="form-group">
    <h3>Description:</h3>
    <article>{!! $contentarea->description !!}</article>
    </div>

    <div class="form-group">
        <h3>HTML Content:</h3>
        <article>{!! $contentarea->order !!}</article>
    </div>

    <div class="form-group">
        <h3>Articles:</h3>
        <ul>
            @foreach($articles as $article)
                <li>{!! $article->title !!}</li>
            @endforeach
        </ul>
    </div>

    <div class="form-group">
        <h3>Created At:</h3>
        <article>{!! $contentarea->created_at !!}</article>
    </div>

    <div class="form-group">
        <h3>Created By:</h3>
        <article>{!! $contentarea->created_by !!}</article>
    </div>
    @if($contentarea->modified_by != null)
    <div class="form-group">
        <h3>Updated At:</h3>
        <article>{!! $contentarea->updated_at !!}</article>
    </div>

    <div class="form-group">
        <h3>Modified By:</h3>
        <article>{!! $contentarea->modified_by !!}</article>
    </div>
    @endif
    <div class="form-group">
        <a href="{{action('ContentAreasController@edit', [$contentarea->id])}}" class="btn btn-default form-control">Edit Content Area</a>
    </div>

    <div class="form-group">
        {!! Form::open([ 'method'  => 'delete', 'route' => [ 'contentareas.destroy', $contentarea->id ] ]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
        {!! Form::close() !!}
    </div>

@stop