<html>
<head>
    <title>{{ config('backpack.base.project_name') }} Error 404</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        a {
            color: #1e88e5;
            transition: color .2s, background .2s;
        }

        a:hover {
            color: #79b8f0;
        }

        a:focus {
            outline: none !important;
        }

        a:focus, a:visited {
            color: #1e88e5;
            text-decoration: none;
        }

        .bottom-news__item_title {
            display: block;
            font-size: 1.2em;
            font-weight: bold;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 156px;
        }

        .quote {
            font-size: 36px;
        }

        .explanation {
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="container" style="background: url(/public/img/bg.jpg) no-repeat center top; background-size: cover;">
    <div class="content">
        <div class="title">404</div>
        <div class="quote">Page not found.</div>
        <div class="explanation">
            <br>
            <small>
                <?php
                $default_error_message = "Please return to <a href='". url('') ."' class='bottom-news__item_title'>our homepage</a>.";
                ?>
                {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
            </small>
        </div>
    </div>
</div>
</body>
</html>
