<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="_token" id="_token" content="{{ csrf_token() }}">
    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/app.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="app">
<div id="wrapper">

    <!-- BEGIN Header -->
    <div id="header">

        <div class="container-fluid header">

            <div class="container">
                @yield('header-content')
            </div>

        </div>

    </div>
    <!-- END Header -->

    <!-- BEGIN Content -->
    <div id="content">

        <div class="container">
            @yield('content')
        </div>

    </div>
    <!-- END Content -->

    <!-- BEGIN Footer -->
    <div id="footer">
        <div class="container text-center">
            <span class="footer-text">Created with &hearts; by <a href="#">Alex</a> - Source code available on <a href="#">GitHub</a></span>
        </div>
    </div>
    <!-- END Footer -->
</div>


<script src="/js/app.js"></script>
</body>
</html>