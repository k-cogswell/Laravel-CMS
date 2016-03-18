@extends('app')

@section('content')

    <div class="form-group">
    <h1>Name: {!! $user->name !!}</h1>
    </div>

    <div class="form-group">
    <h3>Email: {!! $user->email !!}</h3>
    </div>

    <div class="form-group">
    <h3>Password:</h3>
    <article>{!! $user->password !!}</article>
    </div>

    <div class="form-group">
        <h3>Permissions:</h3>
        <ul>
            @foreach($user->permissions as $permission)
                <li>{{ $permission->permission_type }}</li>
                @endforeach
        </ul>
    </div>

    <div class="form-group">
        <a href="{{action('UsersController@edit', [$user->id])}}" class="btn btn-default form-control">Edit User</a>
    </div>

    <div class="form-group">
        {!! Form::open([ 'method'  => 'delete', 'route' => [ 'users.destroy', $user->id ] ]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
        {!! Form::close() !!}
    </div>

    @stop