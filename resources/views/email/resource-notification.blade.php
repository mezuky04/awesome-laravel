<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Really Simple HTML Email Template</title>
    <style>
        /* -------------------------------------
            GLOBAL
        ------------------------------------- */
        * {
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            font-size: 100%;
            line-height: 1.6em;
            margin: 0;
            padding: 0;
        }

        img {
            max-width: 600px;
            width: 100%;
        }

        body {
            -webkit-font-smoothing: antialiased;
            height: 100%;
            -webkit-text-size-adjust: none;
            width: 100% !important;
        }


        /* -------------------------------------
            ELEMENTS
        ------------------------------------- */
        a {
            color: #76C2AF;
        }

        .no-decoration, .no-decoration:hover {
            text-decoration: none;
        }

        .grey-text {
            color: #455a64;
        }

        .button {
            padding: 10px;
            background-color: rgba(0, 0, 0, 0);
            color: #78909c;
            border: 2px solid #cccccc;
            border-radius: 3px;
            transition: 400ms;
            text-align: center;
        }

        .button:hover, .button:active, .button:focus {
            background-color: #76C2AF;
            border-color: #76C2AF;
            color: #ffffff;
            transition: background-color 400ms, border-color 400ms, color 400ms;
        }

        .btn-primary td {
            background-color: #76C2AF;
            border-radius: 3px;
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 14px;
            text-align: center;
            vertical-align: top;
            color: #cccccc;
        }

        .btn-primary td a {
            background-color: #76C2AF;
            border: solid 1px #348eda;
            border-radius: 25px;
            /*border-width: 10px 20px;*/
            display: inline-block;
            color: #76C2AF;
            cursor: pointer;
            font-weight: bold;
            line-height: 2;
            text-decoration: none;
        }

        .last {
            margin-bottom: 0;
        }



        /* -------------------------------------
            BODY
        ------------------------------------- */
        table.body-wrap {
            padding: 20px;
            width: 100%;
        }

        table.body-wrap .container {
            border: 1px solid #f0f0f0;
        }


        /* -------------------------------------
            FOOTER
        ------------------------------------- */
        table.footer-wrap {
            clear: both !important;
            width: 100%;
        }

        .footer-wrap .container p {
            color: #666666;
            font-size: 12px;

        }

        table.footer-wrap a {
            color: #999999;
        }


        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3 {
            color: #455a64;
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 200;
            line-height: 1.2em;
            margin: 0 0 10px;
        }

        h1 {
            font-size: 36px;
        }
        h2 {
            font-size: 28px;
        }
        h3 {
            font-size: 22px;
        }

        p,
        ul,
        ol {
            font-size: 14px;
            font-weight: normal;
            margin-bottom: 10px;
        }

        ul li,
        ol li {
            margin-left: 5px;
            list-style-position: inside;
        }

        /* ---------------------------------------------------
            RESPONSIVENESS
        ------------------------------------------------------ */

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            clear: both !important;
            display: block !important;
            Margin: 0 auto !important;
            max-width: 600px !important;
        }

        /* Set the padding on the td rather than the div for Outlook compatibility */
        .body-wrap .container {
            padding: 20px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            display: block;
            margin: 0 auto;
            max-width: 600px;
        }

        /* Let's make sure tables in the content area are 100% wide */
        .content table {
            width: 100%;
        }

    </style>
</head>

<body bgcolor="#f6f6f6">

<!-- body -->
<table class="body-wrap" bgcolor="#f6f6f6">
    <tr>
        <td></td>
        <td class="container" bgcolor="#FFFFFF">

            <!-- content -->
            <div class="content">
                <table>
                    <tr>
                        <td>
                            <h1 class="grey-text">Awesome Laravel</h1>

                            <p class="grey-text">This is our response for the resource you posted on <a href="{{ url('/') }}">awesome-laravel.com</a></p>

                            <p class="grey-text"><strong>Resource name: </strong><a href="{{ $resource->link }}">{{ $resource->name }}</a></p>
                            <p class="grey-text"><strong>Resource description: </strong>{{ $resource->short_description }}</p>

                            @if (isset($declined) && $declined)
                                <p class="grey-text">
                                    Sorry, but the resource you submitted is not awesome enough to be published or already exists. Next time, please read more
                                    carefully our <a href="{{ url('/contributors-guide') }}">Contributors guide.</a>
                                </p>
                            @else
                                <p class="grey-text">
                                    The resource you submitted is awesome and was published. Your contribution is appreciated.
                                </p>
                            @endif

                            <p class="grey-text">Thank you and have a nice day.</p>

                            @if (isset($declined) && $declined)
                                <a class="no-decoration" href="{{ url('/contributors-guide') }}">
                                    <div class="button">
                                        Read our contributors guide
                                    </div>
                                </a>
                            @endif

                        </td>
                    </tr>
                </table>
            </div>
            <!-- /content -->

        </td>
        <td></td>
    </tr>
</table>
<!-- /body -->

<!-- footer -->
<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">

            <!-- content -->
            <div class="content">
                <table>
                    <tr>
                        <td align="center">
                            <p>
                                <a href="{{ url('/') }}">awesome-laravel.com</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- /content -->

        </td>
        <td></td>
    </tr>
</table>
<!-- /footer -->

</body>
</html>
