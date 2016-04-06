@extends('layouts.base')
@section('header-content')
    <div class="row submit-resource-row">
        <div class="col-md-12">
            <a href="/"><div class="btn btn-ghost">Home</div></a>
            @include('pages.partials.email')
        </div>
    </div>

    <div class="row text-center">
        <h1 class="white-text thin">Contributors Guide</h1>
        <h3 class="white-text thin">Some rules and advice for contributing to Awesome-laravel.com</h3>
    </div>

    <div class="row icon">
        <img class="img-responsive center-responsive-image" alt="awesome-laravel" src="/img/document.svg">
    </div>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="well custom-well blue-grey-text">

                <h4><strong>Simple rules before submitting a resource:</strong></h4>
                <ul>
                    <li>Submit only awesome resources.</li>
                    <li>If you want ot post a resource, make sure does not already exist.</li>
                    <li>Post only resources that are Laravel related.</li>
                </ul>

                <h4><strong>Don’t list inappropriate content</strong></h4>
                <h5>Awesome-laravel.com wants to be a welcoming and inclusive community. Therefore we ask you to please not submit resources and content that is:</h5>
                <ul>
                    <li>Illegal</li>
                    <li>Sexist, racist or offensive in other ways</li>
                    <li>Inflammatory</li>
                    <li>Pornographic or contains nudity</li>
                    <li>Shockingly graphic, grotesque, or obscene</li>
                </ul>
                <h5>If you list a resource that meets one of these criteria is may be removed by Awesome-laravel.com. Awesome-laravel.com has final say over whether content is appropriate. If you repost content that’s been removed or continue to post content that violates these guidelines your account may be suspended or removed.</h5>

                <h4><strong>No spam allowed</strong></h4>
                <h5>
                    Do not abuse Awesome-laravel.com feature set for spamming. This behaviour may result in your account being suspended or removed.
                </h5>
            </div>
        </div>
    </div>
@endsection