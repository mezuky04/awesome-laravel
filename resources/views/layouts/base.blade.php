<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="_token" id="_token" content="{{ csrf_token() }}">
    <title>Awesome Laravel - List of awesome Laravel resources</title>
    <meta name="description" content="Useful Laravel packages, tutorials, videos, articles and other resources.">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-38457291-5', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body id="app">
<div id="wrapper">

    <!-- BEGIN Header -->
    <div id="header">

        @if (!isset($smallHeader))
        <div class="container-fluid header">
            <div class="container">
                @yield('header-content')
            </div>
        </div>
        @else
            @include('layouts.partials.navbar')
        @endif

    </div>
    <!-- END Header -->

    <!-- BEGIN Content -->
    <div id="content">

        <div class="container">
            <noscript>
                <div class="alert alert-danger no-js">
                    <img src="/img/warning.svg" alt="warning" />
                    &nbsp;&nbsp;Ooops. Looks like you have JavaScript disabled. Awesome Laravel is built using it. Please enable JavaScript to view awesome Laravel resources. Thank you!</div>
            </noscript>
            @yield('content')
        </div>

    </div>
    <!-- END Content -->

    <!-- BEGIN Footer -->
    <div id="footer">
        <div class="container text-center">
            <span class="footer-text">Created with &hearts; by <a href="#">Alex</a>. Source code available on <a target="_blank" href="https://github.com/mezuky04/awesome-laravel">GitHub</a>.</span>
        </div>
    </div>
    <!-- END Footer -->
</div>


<script src="/js/app.js"></script>
</body>
</html>