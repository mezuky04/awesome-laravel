@extends('layouts.base')
@section('header-content')

    <div class="row text-center">
        <h1 class="white-text thin">Do you know an awesome resource that is not present here?</h1>
        <h1 class="white-text thin">Then share it.</h1>
    </div>
    <div class="row icon">
        <img class="img-responsive center-responsive-image" src="/img/upload.svg">
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <!-- BEGIN Resource name -->
            <div class="form-group">
                <label for="resource-name">Resource name:</label>
                <input type="text" id="resource-name" class="form-control" placeholder="Example: Laracasts" />
            </div>
            <!-- END Resource name -->

            <!-- BEGIN Short resource description -->
            <div class="form-group">
                <label for="short-resource-description">Short resource description:</label>
                <input type="text" id="short-resource-description" class="form-control" placeholder="Example: Learn practical, modern web development, through expert screencasts." />
            </div>
            <!-- END Short resource description -->

            <!-- BEGIN Resource link -->
            <div class="form-group">
                <label for="resource-link">Resource link:</label>
                <input type="text" id="resource-link" class="form-control" placeholder="https://laracasts.com" />
            </div>
            <!-- END Resource link -->

            <!-- BEGIN Your email -->
            <div class="form-group">
                <label for="your-email">Your email:</label>
                <input type="email" id="your-email" class="form-control" placeholder="john.doe@example.com" />
            </div>
            <!-- END Your email -->

            <!-- BEGIN Submit resource -->
            <div class="btn btn-block btn-ghost-inverse">Share resource with others</div>
            <!-- END Submit resource -->

        </div>
    </div>
@endsection