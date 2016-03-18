@extends('app')

@section('content')

    <h1>CSS Templates</h1>

    <hr/>

    <a href="{{action('cssTemplatesController@create')}}" class="btn btn-default">Create CSS Template</a>

    @foreach($csstemplates as $csstemplate)
        <article>
            <h2><a href="{{action('cssTemplatesController@show', [$csstemplate->id])}}">{{ $csstemplate->name }}</a></h2>
            <div class="body">Description: {{ $csstemplate->description }}</div></br>
            <div class="body">Content: {{ $csstemplate->content }}</div></br>
            <div class="body">Active: {{$csstemplate->active}}</div></br>
            <div class="body">Created At:{{ $csstemplate->created_at }}</div></br>
            <div class="body">Created By:{{ $csstemplate->created_by }}</div></br>
            @if($csstemplate->modified_by != null)
            <div class="body">Modified At:{{ $csstemplate->updated_at }}</div></br>
            <div class="body">Modified By:{{ $csstemplate->modified_by}}</div></br>
            @endif
        </article>
    @endforeach

    @stop