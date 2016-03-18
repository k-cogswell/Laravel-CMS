@extends('app')

@section('content')

    <h1>Content Areas</h1>

    <hr/>

    <a href="{{action('ContentAreasController@create')}}" class="btn btn-default">Create Content Area</a>

    @foreach($contentareas as $contentarea)
        <article>
            <h2><a href="{{action('ContentAreasController@show', [$contentarea->id])}}">{{ $contentarea->name }}</a></h2>
            <h2>Alias: {{ $contentarea->alias }}</h2></br>
            <div class="body">Description:{{ $contentarea->description }}</div></br>
            <div class="body">Display Order:{{ $contentarea->order }}</div></br>
            <div class="body">Created At:{{ $contentarea->created_at }}</div></br>
            <div class="body">Created By:{{ $contentarea->created_by }}</div></br>
            @if($contentarea->modified_by != null)
            <div class="body">Modified At:{{ $contentarea->updated_at }}</div></br>
            <div class="body">Modified By:{{ $contentarea->modified_by}}</div></br>
                @endif

        </article>
    @endforeach

    @stop