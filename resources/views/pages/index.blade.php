@extends('app')

@section('content')

    <h1>Pages</h1>

    <hr/>

    <a href="{{action('PagesController@create')}}" class="btn btn-default">Create Page</a>

        @foreach($pages as $page)
        <article>
            <h2><a href="{{action('PagesController@show', [$page->id])}}">{{ $page->alias }}</a></h2>

            <h2>Name: {{ $page->name }}</h2>
            <div class="body">Description: {{ $page->description }}</div></br>
            <div class="body">Created At:{{ $page->created_at }}</div></br>
            <div class="body">Created By:{{ $page->created_by }}</div></br>
            @if($page->modified_by != null)
                <div class="body">Modified At:{{ $page->updated_at }}</div></br>
                <div class="body">Modified By:{{ $page->modified_by}}</div></br>
            @endif
        </article>
        @endforeach

    @stop