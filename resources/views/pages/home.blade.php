@extends('layouts.base')
@section('header-content')
    <div class="row submit-resource-row">
        <div class="col-md-12">
            <a href="/submit-resource"><div class="btn btn-ghost">Submit resource</div></a>
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
        </div>
    </div>

    <div class="row text-center">
        <h1 class="white-text thin">Awesome Laravel</h1>
        <h3 class="white-text thin">Useful Laravel packages, tutorials, videos, articles and other resources.</h3>
    </div>

    <div class="row icon">
        <img class="img-responsive center-responsive-image" src="/img/icon.svg">
    </div>
@endsection
@section('content')
    <resources></resources>
@endsection