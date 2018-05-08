    <nav class="site-navbar navbar navbar-default navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                    data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                    data-toggle="collapse">
                <i class="icon wb-more-horizontal" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                <img class="navbar-brand-logo" src="{{ asset('v1/images/logo.png') }}" title="{{ $setting['web_name'] }}">
            </div>
        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
                <ul class="nav navbar-toolbar">
                    <li class="nav-item hidden-float" id="toggleMenubar">
                        <a class="nav-link" data-toggle="menubar" href="#" role="button">
                            <i class="icon hamburger hamburger-arrow-left">
                                <span class="sr-only">Toggle menubar</span>
                                <span class="hamburger-bar"></span>
                            </i>
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-fw dropdown-mega">
                        <a class="nav-link" href="{{ route('admin.student.index') }}" aria-expanded="false" data-animation="fade" role="button">学生管理</a>
                    </li>
                    <li class="nav-item dropdown dropdown-fw dropdown-mega">
                        <a class="nav-link" href="{{ route('user.index') }}" aria-expanded="false" data-animation="fade" role="button">代理商管理</a>
                    </li>
                    <li class="nav-item dropdown dropdown-fw dropdown-mega">
                        <a class="nav-link" href="www" aria-expanded="false" data-animation="fade" role="button">数据查询</a>
                    </li>
                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                    <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                        <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                            <span class="sr-only">Toggle fullscreen</span>
                        </a>
                    </li>
                    <li class="nav-item" id="toggleChat">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="icon wb-power" aria-hidden="true"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->
                <div class="navbar-brand navbar-brand-center">
                    <a href="/">
                        <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{ asset('v1/images/logo.png') }}" title="{{ $setting['web_name'] }}">
                        <img class="navbar-brand-logo navbar-brand-logo-special" src="{{ asset('v1/images/logo-colored.png') }}" title="{{ $setting['web_name'] }}">
                    </a>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
