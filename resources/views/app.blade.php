<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MozQ</title>

    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css?v=4.8') }}" rel="stylesheet">
    <link href="{{ asset('public/css/services.css?v=4.8') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('public/js/jquery-3.1.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('public/plugins/lightbox/css/lightbox.css') }}" type="text/css" />
    <script src="{{ asset('public/plugins/lightbox/js/lightbox.js') }}"></script>

    <!-- bin/jquery.slider.min.css -->
    <link rel="stylesheet" href="{{ asset('public/css/jslider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/jslider.blue.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/jslider.plastic.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/jslider.round.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/jslider.round.plastic.css') }}" type="text/css">
    <!-- end -->

    <!-- bin/jquery.slider.min.js -->
    <script type="text/javascript" src="{{ asset('public/js/jshashtable-2.1_src.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.numberformatter-1.2.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/tmpl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.dependClass-0.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/draggable-0.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.slider.js') }}"></script>
    <!-- end -->
    <link href="{{ asset('public/css/store.css?v=4.6') }}" rel="stylesheet">
</head>

<body>

@yield('content')

<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('public/js/script.js?v=4.6') }}"></script>

</body>
</html>