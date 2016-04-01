@extends('layouts.base')
@section('header-content')

    <div class="row homepage-row">
        <a href="/"><div class="btn btn-ghost">Homepage</div></a>
    </div>

    <div class="row text-center">
        <h1 class="white-text thin">Do you know an awesome resource that is not present here?</h1>
        <h1 class="white-text thin">Then share it.</h1>
    </div>
    <div class="row icon">
        <img class="img-responsive center-responsive-image" src="/img/upload.svg">
    </div>
@endsection

@section('content')
    <submit-resource></submit-resource>
@endsection