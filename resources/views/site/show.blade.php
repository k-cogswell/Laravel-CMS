<!DOCTYPE html>
<html>
<head>
<title> {{$page->name}}</title>
    <style type="text/css">
        .button{
            -webkit-appearance: button;
            -moz-appearance: button;
            appearance: button;

            text-decoration: none;
            color: initial;
        }

        @foreach($css as $template)
        {{$template->content}}
        @endforeach
    </style>
</head>

<body>
<header><h1>{{$page->name}}</h1></header>
<nav>
    <ul>
        @foreach($pages as $pageList)
            <li><a href='/site/{{$pageList->id}}'> {{$pageList->name}}</a></li>
        @endforeach
    </ul>
</nav>

<section>
    @foreach($content as $area)
        <div id="{{$area->alias}}">
            @foreach($articles->where('content_area', $area->name)->where('page', $page->name) as $article)
                <article id="{{$article->name}}">
                    <h3>{!! $article->title !!}</h3>
                    {!! $article->HTML !!}
                    @if(!Auth::guest() && Auth::user()->permissions->keyBy('id')->has(3))
                    <a href="{{action('SiteController@edit', [$article->id])}}" class="button">Edit Article</a>
                    @endif
                </article>
            @endforeach
        </div>
    @endforeach
</section>
@if(Auth::guest())
    <a href="{{ url('auth/login') }}">Log In</a>
@else
    <a href="{{ url('auth/logout') }}">Log Out</a>
@endif
</body>

</html>