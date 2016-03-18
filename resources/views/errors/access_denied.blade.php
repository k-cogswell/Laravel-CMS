<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>
@include('partials.nav')

<div class="container">
    <h1>Only {{ $user }} can view this content</h1>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
@yield('footer')
</body>
</html>