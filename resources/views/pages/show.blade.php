@extends('app')

@section('content')

    <div class="form-group">
    <h1>Name: {!! $page->name !!}</h1>
    </div>

    <div class="form-group">
    <h3>Alias: {!! $page->alias !!}</h3>
    </div>

    <div class="form-group">
    <h3>Description:</h3>
    <article>{!! $page->description !!}</article>
    </div>

    <div class="form-group">
        <h3>Articles:</h3>
        <ul>
            @foreach($articles as $article)
                <li>{!! $article->title !!}</li>
                @endforeach
        </ul>
    </div>

    @if($page->modified_by != null)
        <div class="form-group">
            <h3>Updated At:</h3>
            <article>{!! $page->updated_at !!}</article>
        </div>

        <div class="form-group">
            <h3>Modified By:</h3>
            <article>{!! $page->modified_by !!}</article>
        </div>
        @endif

    <div class="form-group">
        <a href="{{action('PagesController@edit', [$page->id])}}" class="btn btn-default form-control">Edit Page</a>
    </div>

    <div class="form-group">
        {!! Form::open([ 'method'  => 'delete', 'route' => [ 'pages.destroy', $page->id ] ]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
        {!! Form::close() !!}
    </div>

    @stop