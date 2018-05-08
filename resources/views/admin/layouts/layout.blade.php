@include('commons.header')
<body class="animsition">
    @include('commons.browser')
    @include('admin.commons.navbar')

    @include('admin.commons.menubar')
    <!-- Page -->
    <div class="page">
        @yield('content')
    </div>
    <!-- End Page -->
    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-footer-legal">{{ $setting['copyright'] }}</a>
        </div>
        <div class="site-footer-right">
            Crafted with <i class="red-600 wb wb-heart"></i> by <a href="javascript:void(0)">{{ $setting['web_name'] }}</a>
        </div>
    </footer>
@include('commons.footer')