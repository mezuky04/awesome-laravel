@if (Auth::check())
    <div class="dropdown display-inline-block pull-right white-text email">
        <div data-toggle="dropdown">
            <span class="pointer"><span class="glyphicon glyphicon-user"></span>&nbsp;{{ Auth::user()->email }}</span>
            <span class="caret"></span>
        </div>
        <ul class="dropdown-menu">
            @role('admin')
            <li><a href="/admin-center">Admin center</a></li>
            @endrole
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>
@endif