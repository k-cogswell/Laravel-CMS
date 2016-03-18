<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('permission_list', 'Permissions:') !!}
    {!! Form::select('permission_list[]', $permissions, null, ['id' => 'permission_list', 'class' => 'form-control', 'multiple']) !!}
</div>


<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>


@section('footer')
    <script>
        $('#permission_list').select2({
            placeholder: 'Give Permissions'
        });
    </script>
@endsection