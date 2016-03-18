<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand inactiveLink" href="/">Blog</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/users">Users</a></li>
                <li><a href="/pages">Pages</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/contentareas">Content Areas</a></li>
                <li><a href="/csstemplates">CSS Templates</a></li>
                <li><a href="/site">Main Site</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                <li><a href="{{ url('auth/login') }}">Log In</a></li>
                @else
                    <li><a href="auth/logout">Log Out</a></li>
                    @endif
            </ul>

        </div>

    </div>
</nav>