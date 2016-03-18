@extends('app')

@section('content')

    <h1>Articles</h1>

    <hr/>

    <a href="{{action('ArticlesController@create')}}" class="btn btn-default">Create Article</a>

    @foreach($articles as $article)
        <article>
            <h2><a href="{{action('ArticlesController@show', [$article->id])}}">{{ $article->name }}</a></h2>
            @if($article->name == 'Archive')
                <h2>Title: {{ $article->title }} <span> Archived </span><</h2>/br>
            @elseif(!$article->name == 'Archive')
                <h2>Title: {{ $article->title }}</h2><
            @endif
            <div class="body">Description:{{ $article->description }}</div></br>
            <div class="body">All Pages:{{ $article->all_pages }}</div></br>
            <div class="body">Page:{{ $article->page }}</div></br>
            <div class="body">Content Area:{{ $article->content_area }}</div></br>
            <div class="body">Created At:{{ $article->created_at }}</div></br>
            <div class="body">Created By:{{ $article->created_by }}</div></br>
            @if($article->modified_by != null)
            <div class="body">Modified At:{{ $article->updated_at }}</div></br>
            <div class="body">Modified By:{{ $article->modified_by}}</div></br>
            @endif
            <div class="body">HTML: {{ $article->HTML }}</div>
        </article>
    @endforeach

    @stop