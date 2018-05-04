    <!-- Core  -->
    <script src="{{ asset('v1/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{ asset('v1/vendor/jquery/jquery.js')}}"></script>
    <script src="{{ asset('v1/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{ asset('v1/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{ asset('v1/vendor/animsition/animsition.js')}}"></script>
    <script src="{{ asset('v1/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{ asset('v1/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{ asset('v1/vendor/asscrollable/jquery-asScrollable.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('v1/vendor/switchery/switchery.js')}}"></script>
    <script src="{{ asset('v1/vendor/intro-js/intro.js')}}"></script>
    <script src="{{ asset('v1/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{ asset('v1/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
    <script src="{{ asset('v1/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

    <!-- Scripts -->
    <script src="{{ asset('v1/js/Component.js')}}"></script>
    <script src="{{ asset('v1/js/Plugin.js')}}"></script>
    <script src="{{ asset('v1/js/Base.js')}}"></script>
    <script src="{{ asset('v1/js/Config.js')}}"></script>
    <script src="{{ asset('v1/js/Section/Menubar.js')}}"></script>
    <script src="{{ asset('v1/js/Section/Sidebar.js')}}"></script>
    <script src="{{ asset('v1/js/Section/PageAside.js')}}"></script>
    <script src="{{ asset('v1/js/Plugin/menu.js')}}"></script>

    <!-- Config -->
    <script src="{{ asset('v1/js/config/colors.js')}}"></script>
    <script src="{{ asset('v1/js/config/tour.js')}}"></script>
    <script>Config.set('assets', '.');</script>

    <!-- Page -->
    <script src="{{ asset('v1/js/Site.js')}}"></script>
    <script src="{{ asset('v1/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{ asset('v1/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{ asset('v1/js/Plugin/switchery.js')}}"></script>
    <script src="{{ asset('v1/js/Plugin/jquery-placeholder.js')}}"></script>

    <script>
        (function (document, window, $) {
            'use strict';
            var Site = window.Site;
            $(document).ready(function () {
                Site.run();
            });
        })(document, window, jQuery);
    </script>
</body>
</html>