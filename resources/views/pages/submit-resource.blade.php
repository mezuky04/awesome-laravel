@extends('layouts.base')
@section('header-content')

    <div class="row homepage-row">
        <a href="/"><div class="btn btn-ghost">Homepage</div></a>
    </div>

    <div class="row text-center">
        <h1 class="white-text thin">Do you know an awesome Laravel resource that is not present here?</h1>
        <h1 class="white-text thin">Share with others.</h1>
    </div>
    <div class="row icon">
        <img class="img-responsive center-responsive-image" src="/img/upload.svg">
    </div>
@endsection

@section('content')
    @if(Auth::check())
        <submit-resource></submit-resource>
    @else
        <login-to-continue></login-to-continue>
    @endif
@endsection