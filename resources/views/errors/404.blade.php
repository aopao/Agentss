@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/css/errors.min.css') }}">
@endsection
@section('content')
    <body class="animsition page-error page-error-404 layout-full">
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <header>
                <h1 class="animation-slide-top">404</h1>
                <p>@lang('tips.404')</p>
            </header>
            <a class="btn btn-primary btn-round" href="{{ route('login') }}">@lang('tips.go_to_login')</a>

            <footer class="page-copyright">
                <p>{{ $setting['web_name'] }}</p>
                <p>{{ $setting['copyright'] }}</p>
            </footer>
        </div>
    </div>
    <!-- End Page -->
    </div>
@endsection







