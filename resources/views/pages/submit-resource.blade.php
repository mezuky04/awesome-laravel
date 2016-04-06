@extends('layouts.base')
@section('header-content')

    <div class="row homepage-row">
        <div class="col-md-12">
            <a href="/"><div class="btn btn-ghost">Homepage</div></a>
            @include('pages.partials.email')
        </div>
    </div>

    <div class="row text-center">
        <h1 class="white-text thin">Do you know an awesome Laravel resource that is not present here?</h1>
        <h4 class="read-guide white-text">Please read our <a href="/contributors-guide">Contributors guide</a> before posting a resource. Thank you!</h4>
    </div>
    <div class="row icon">
        <img class="img-responsive center-responsive-image" alt="awesome-laravel" src="/img/upload.svg">
    </div>
@endsection

@section('content')
    @if(Auth::check())
        <submit-resource></submit-resource>
    @else
        <login-to-continue></login-to-continue>
    @endif
@endsection