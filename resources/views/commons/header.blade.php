<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>{{ $setting['web_name'] }}</title>
    <link rel="apple-touch-icon" href="{{ asset('v1/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('v1/images/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('v1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/css/site.min.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('v1/vendor/animsition/animsition.css') }}">
    @yield('css')

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('v1/fonts/web-icons/web-icons.min.css') }}">

    <!--[if lt IE 9]>

    <script src="{{ asset('v1/vendor/html5shiv/html5shiv.min.js') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('v1/vendor/media-match/media.match.min.js') }}"></script>
    <script src="{{ asset('v1/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

</head>
