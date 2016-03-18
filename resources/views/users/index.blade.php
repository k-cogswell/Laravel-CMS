@extends('app')

@section('content')

    <h1>Users</h1>

    <hr/>

    <a href="{{action('UsersController@create')}}" class="btn btn-default">Create User</a>

        @foreach($users as $user)
        <article>
            <h2><a href="{{action('UsersController@show', [$user->id])}}">{{ $user->name }}</a></h2>
            <div class="body">Email: {{ $user->email }}</div></br>
            <div class="body">password: {{ $user->password }}</div></br>
            <div class="body">Created At:{{ $user->created_at }}</div></br>
            <div class="body">Modified At:{{ $user->updated_at }}</div></br>
        </article>
        @endforeach

    @stop