@extends('app')

@section('content')

<h1>Create a New User</h1>

    {!! Form::open(['url' => 'users']) !!}
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('permission_list', 'Permissions:') !!}
    {!! Form::select('permission_list[]', $permissions, null, ['id' => 'permission_list', 'class' => 'form-control', 'multiple']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Create User', ['class' => 'btn btn-primary form-control']) !!}
</div>


@section('footer')
    <script>
        $('#permission_list').select2({
            placeholder: 'Give Permissions'
        });
    </script>
@endsection
    {!! Form::close() !!}

        @include('errors.list')

    @stop