    <!-- Core  -->
    <script src="{{ asset('v1/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{ asset('v1/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('v1/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{ asset('v1/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('v1/vendor/animsition/animsition.min.js')}}"></script>
{{--    <script src="{{ asset('v1/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>--}}
    <script src="{{ asset('v1/vendor/asscrollbar/jquery-asScrollbar.min.js')}}"></script>
    <script src="{{ asset('v1/vendor/asscrollable/jquery-asScrollable.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('v1/vendor/screenfull/screenfull.js')}}"></script>

    <!-- Scripts -->
    <script src="{{ asset('v1/js/Component.js')}}"></script>
    <script src="{{ asset('v1/js/Plugin.js')}}"></script>
    <script src="{{ asset('v1/js/Base.js')}}"></script>
    <script src="{{ asset('v1/js/Section/Menubar.js')}}"></script>
    <script src="{{ asset('v1/js/Section/Sidebar.js')}}"></script>
    <script src="{{ asset('v1/js/Section/PageAside.js')}}"></script>
    <script src="{{ asset('v1/js/Plugin/menu.js')}}"></script>

    <!-- Page -->
    <script src="{{ asset('v1/js/Site.js')}}"></script>
    <script>
        (function (document, window, $) {
            'use strict';
            var Site = window.Site;
            $(document).ready(function () {
                Site.run();
            });
        })(document, window, jQuery);
    </script>
@yield('js')
</body>
</html>