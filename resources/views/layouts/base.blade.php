<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/app.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">

    <!-- BEGIN Header -->
    <div id="header">

        <div class="container-fluid header">

            <div class="container">
                <div class="row submit-resource-row">
                    <a href="/submit-resource"><div class="btn btn-ghost">Submit resource</div></a>
                </div>
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
        <div class="container">
            footer
        </div>
    </div>
    <!-- END Footer -->
</div>


<script src="/js/app.js"></script>

</body>
</html>