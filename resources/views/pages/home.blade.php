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

                <div class="row text-center">
                    <h1 class="white-text thin">Awesome Laravel</h1>
                    <h3 class="white-text thin">Useful Laravel packages, tutorials, videos, articles and other resources.</h3>
                </div>

                <div class="row icon">
                    <img class="img-responsive center-responsive-image" src="/img/icon.svg">
                </div>

            </div>

        </div>

    </div>
    <!-- END Header -->

    <!-- BEGIN Content -->
    <div id="content">

        <div class="container">
            <div class="row">

                <div class="col-md-4 col-md-offset-4 text-center">
                    <h3 class="blue-grey-text">Choose a category</h3>
                    <select class="selectpicker" data-style="btn-ghost-inverse">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                        <option>Relish</option>
                        <option>Relish</option>
                    </select>
                </div>

            </div>

            <div class="row">
                <h3 class="blue-grey-text">Last resources added</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item"><strong>First item</strong> - short resource description goes here</a>
                    <a href="#" class="list-group-item">Second item</a>
                    <a href="#" class="list-group-item">Third item</a>
                </div>
            </div>

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