<nav class="navbar navbar-static-top navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Awesome Laravel</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;{{ Auth::user()->email }}</a></li>
            <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
        </ul>
    </div>
</nav>