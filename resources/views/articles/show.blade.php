@extends('app')

@section('content')
    <div class="form-group">
    <h1>Name: {!! $article->name !!}</h1>
    </div>
    
    <div class="form-group">
    <h3>Title: {!! $article->title !!}</h3>
    </div>

    <div class="form-group">
    <h3>Description:</h3>
    <article>{!! $article->description !!}</article>
    </div>

    <div class="form-group">
        <h3>HTML Content:</h3>
        <article>{!! $article->HTML !!}</article>
    </div>

    <div class="form-group">
        <h3>Created At:</h3>
        <article>{!! $article->created_at !!}</article>
    </div>

    <div class="form-group">
        <h3>Created By:</h3>
        <article>{!! $article->created_by !!}</article>
    </div>
    @if($article->modified_by != null)
    <div class="form-group">
        <h3>Updated At:</h3>
        <article>{!! $article->updated_at !!}</article>
    </div>

    <div class="form-group">
        <h3>Modified By:</h3>
        <article>{!! $article->modified_by !!}</article>
    </div>
@endif
    <div class="form-group">
        <a href="{{action('ArticlesController@edit', [$article->id])}}" class="btn btn-default form-control">Edit Article</a>
    </div>

    <div class="form-group">
        {!! Form::open([ 'method'  => 'delete', 'route' => [ 'articles.destroy', $article->id ] ]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
        {!! Form::close() !!}
    </div>

@stop