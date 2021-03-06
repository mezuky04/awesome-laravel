@extends('layouts.base')

@section('header-content')

    <div class="row homepage-row">
        <a href="/"><div class="btn btn-ghost">Homepage</div></a>
    </div>

    <div class="row text-center">
        <h1 class="white-text thin">Admin center log in.</h1>
    </div>

    <div class="row icon">
        <img class="img-responsive center-responsive-image" src="/img/login.svg" />
    </div>

@endsection

@section('content')

    <Login></Login>

@endsection