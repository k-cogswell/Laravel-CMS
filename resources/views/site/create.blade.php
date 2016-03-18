<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#tinyMCE' });</script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" />
    <title>Create Article</title>
</head>

<body>

<div class="container">
    <h1>Create Article</h1>

    {!! Form::open(['url' => 'articles']) !!}
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
        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
</body>
</html>