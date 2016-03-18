<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('HTML', 'HTML:') !!}
    {!! Form::textarea('HTML', null, ['id' => 'tinyMCE', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('all_pages', 'All Pages:') !!}
    {!! Form::select('all_pages', ['Unassigned' => 'Unassigned','Yes' => 'yes','No' => 'no'], null, ['id' => 'tag_list', 'class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('page', 'Page:') !!}
    {!! Form::select('page', $pages, null, ['id' => 'tag_list', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content_area', 'Content Area:') !!}
    {!! Form::select('content_area', $content, null, ['id' => 'tag_list', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>