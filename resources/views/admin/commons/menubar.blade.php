
    <div class="site-menubar">
        <div class="site-menubar-header">
            <div class="cover overlay">
                <img class="cover-image" src="{{ asset('v1/images/dashboard-header.jpg') }}"
                     alt="...">
                <div class="overlay-panel vertical-align overlay-background">
                    <div class="vertical-align-middle">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                            <img src="{{ Auth::user()->avatar }}" alt="">
                        </a>
                        <div class="site-menubar-info">
                            <h5 class="site-menubar-user">{{ Auth::user()->nickname }}</h5>
                            <p class="site-menubar-email">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu" data-plugin="menu">
                        <li class="site-menu-item has-sub active open">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                                <div class="site-menu-badge">
                                    <span class="badge badge-pill badge-success">3</span>
                                </div>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../index.html">
                                        <span class="site-menu-title">Dashboard v1</span>
                                    </a>
                                </li>
                                <li class="site-menu-item active">
                                    <a class="animsition-link" href="../dashboard/v2.html">
                                        <span class="site-menu-title">Dashboard v2</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../dashboard/ecommerce.html">
                                        <span class="site-menu-title">Ecommerce</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../dashboard/analytics.html">
                                        <span class="site-menu-title">Analytics</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../dashboard/team.html">
                                        <span class="site-menu-title">Team</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                                <span class="site-menu-title">Layouts</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/menubar-fold.html">
                                        <span class="site-menu-title">Menubar Fold</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/menubar-disable-hover.html">
                                        <span class="site-menu-title">Menubar Disable Hover</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/menubar-open.html">
                                        <span class="site-menu-title">Menubar Open</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/menubar-push.html">
                                        <span class="site-menu-title">Menubar Push</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/grids.html">
                                        <span class="site-menu-title">Grid Scaffolding</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/layout-grid.html">
                                        <span class="site-menu-title">Layout Grid</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/headers.html">
                                        <span class="site-menu-title">Different Headers</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/panel-transition.html">
                                        <span class="site-menu-title">Panel Transition</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/boxed.html">
                                        <span class="site-menu-title">Boxed Layout</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/two-columns.html">
                                        <span class="site-menu-title">Two Columns</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="../layouts/bordered-header.html">
                                        <span class="site-menu-title">Bordered Header</span>
                                    </a>
                                </li>
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Page Aside</span>
                                        <div class="site-menu-label">
                                            <span class="badge badge-danger badge-round mr-25">new</span>
                                        </div>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="../layouts/aside-left-static.html">
                                                <span class="site-menu-title">Left Static</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="../layouts/aside-right-static.html">
                                                <span class="site-menu-title">Right Static</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="../layouts/aside-left-fixed.html">
                                                <span class="site-menu-title">Left Fixed</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="../layouts/aside-right-fixed.html">
                                                <span class="site-menu-title">Right Fixed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
