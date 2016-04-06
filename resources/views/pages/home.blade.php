@extends('layouts.base')
@section('header-content')
    <div class="row submit-resource-row">
        <div class="col-md-12">
            <a href="/submit-resource"><div class="btn btn-ghost">Submit resource</div></a>
            @include('pages.partials.email')
        </div>
    </div>

    <div class="row text-center">
        <h1 class="white-text thin">Awesome Laravel</h1>
        <h2 class="white-text thin">Useful Laravel packages, tutorials, videos, articles and other resources.</h2>
    </div>

    <div class="row icon">
        <img class="img-responsive center-responsive-image" alt="awesome-laravel" src="/img/icon.svg">
    </div>
@endsection
@section('content')
    <resources></resources>
@endsection