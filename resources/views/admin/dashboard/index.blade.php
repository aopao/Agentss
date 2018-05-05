@extends('admin.layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/css/dashboard.min.css') }}">
@endsection
@section('content')
    <div class="page-header h-300 mb-30">
        <div class="text-center blue-grey-800 m-0 mt-50">
            <div class="font-size-50 mb-30 blue-grey-800">{{ Auth::user()->nickname }}</div>
            <ul class="list-inline font-size-14">
                <li class="list-inline-item">
                    <i class="icon wb-cloud mr-5" aria-hidden="true"></i>黑马高考规划师
                </li>
                <li class="list-inline-item ml-20">
                    <i class="icon wb-users" aria-hidden="true"></i> 学生总数:2324
                </li>
            </ul>
        </div>
    </div>

    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-3 col-xl-4">
                <!-- Panel Web Designer -->
                <div class="card card-shadow">
                    <div class="card-block text-center bg-white p-40">
                        <div class="avatar avatar-100 mb-20">
                            <img src="{{ asset('v1/images/1.jpg') }}" alt="">
                        </div>
                        <p class="font-size-20 blue-grey-700">{{ Auth::user()->username }}</p>
                        <p class="blue-grey-400 mb-20">黑马高考规划师</p>
                        <p class="mb-35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                            nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                            nisi. </p>
                    </div>
                </div>
                <!-- End Panel Web Designer -->
            </div>

            <div class="col-xxl-6 col-xl-8">
                <!-- Panel Traffic -->
                <div class="card card-shadow example-responsive" id="widgetLinearea">
                    <div class="card-block p-30" style="min-width:480px;">
                        <div class="row pb-20" style="height:calc(100% - 322px);">
                            <div class="col-md-8 col-sm-6">
                                <div class="blue-grey-700">YOUR TRAFFIC VIEWS</div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="counter counter-md">
                                            <div class="counter-number-group text-nowrap">
                                                <span class="counter-number">76</span>
                                                <span class="counter-number-related">%</span>
                                            </div>
                                            <div class="counter-label blue-grey-400">PC Browser</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="counter counter-md">
                                            <div class="counter-number-group text-nowrap">
                                                <span class="counter-number">24</span>
                                                <span class="counter-number-related">%</span>
                                            </div>
                                            <div class="counter-label blue-grey-400">Mobile Phone</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ct-chart mb-30" style="height:270px;"></div>
                        <ul class="list-inline text-center mb-0">
                            <li class="list-inline-item">
                                <i class="icon wb-large-point blue-200 mr-10" aria-hidden="true"></i> PC BROWSER
                            </li>
                            <li class="list-inline-item ml-35">
                                <i class="icon wb-large-point teal-200 mr-10" aria-hidden="true"></i> MOBILE PHONE
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Panel Traffic -->
            </div>

            <div class="col-xxl-3">
                <div class="row h-full">
                    <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
                        <!-- Panel Overall Sales -->
                        <div class="card card-shadow card-inverse bg-blue-600 white">
                            <div class="card-block p-30">
                                <div class="counter counter-lg counter-inverse text-left">
                                    <div class="counter-label mb-20">
                                        <div>OVERALL SALES</div>
                                        <div>Lorem ipsum dolor sit amet</div>
                                    </div>
                                    <div class="counter-number-group mb-15">
                                        <span class="counter-number-related">$</span>
                                        <span class="counter-number">14,000</span>
                                    </div>
                                    <div class="counter-label">
                                        <div class="progress progress-xs mb-10 bg-blue-800">
                                            <div class="progress-bar progress-bar-info bg-white" style="width: 42%"
                                                 aria-valuemax="100"
                                                 aria-valuemin="0" aria-valuenow="42" role="progressbar">
                                                <span class="sr-only">42%</span>
                                            </div>
                                        </div>
                                        <div class="counter counter-sm text-left">
                                            <div class="counter-number-group">
                                                <span class="counter-number font-size-14">42%</span>
                                                <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel Overall Sales -->
                    </div>

                    <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
                        <!-- Panel Today's Sales -->
                        <div class="card card-shadow card-inverse bg-red-600 white">
                            <div class="card-block p-30">
                                <div class="counter counter-lg counter-inverse text-left">
                                    <div class="counter-label mb-20">
                                        <div>TODAY'S SALES</div>
                                        <div>Lorem ipsum dolor sit amet</div>
                                    </div>
                                    <div class="counter-number-group mb-10">
                                        <span class="counter-number-related">$</span>
                                        <span class="counter-number">41,160</span>
                                    </div>
                                    <div class="counter-label">
                                        <div class="progress progress-xs mb-10 bg-red-800">
                                            <div class="progress-bar progress-bar-info bg-white" style="width: 70%"
                                                 aria-valuemax="100"
                                                 aria-valuemin="0" aria-valuenow="70" role="progressbar">
                                                <span class="sr-only">70%</span>
                                            </div>
                                        </div>
                                        <div class="counter counter-sm text-left">
                                            <div class="counter-number-group">
                                                <span class="counter-number font-size-14">70%</span>
                                                <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel Today's Sales -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xl-4 col-lg-6">
                <!-- Panel Followers -->
                <div class="panel" id="followers">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Followers
                        </h3>
                        <div class="panel-actions panel-actions-keep">
                            <div class="dropdown">
                                <a class="panel-action" id="examplePanelDropdown" data-toggle="dropdown" href="#"
                                   aria-expanded="false" role="button"><i class="icon wb-more-vertical"
                                                                          aria-hidden="true"></i></a>
                                <div class="dropdown-menu dropdown-menu-bullet dropdown-menu-right"
                                     aria-labelledby="examplePanelDropdown"
                                     role="menu">
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                                class="icon wb-flag" aria-hidden="true"></i> Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                                class="icon wb-print" aria-hidden="true"></i> Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                                class="icon wb-heart" aria-hidden="true"></i> Something else
                                        here</a>
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                                class="icon wb-share" aria-hidden="true"></i> Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel Followers -->
            </div>

            <div class="col-xl-4 col-lg-6">
                <!-- Panel Tickets -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tickets</h3>
                        <div class="panel-actions panel-actions-keep">
                            <div class="dropdown">
                                <a class="panel-action" id="examplePanelDropdown" data-toggle="dropdown" href="#"
                                   aria-expanded="false" role="button"><i class="icon wb-more-vertical"
                                                                          aria-hidden="true"></i></a>
                                <div class="dropdown-menu dropdown-menu-bullet dropdown-menu-right"
                                     aria-labelledby="examplePanelDropdown"
                                     role="menu">
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                                class="icon wb-flag" aria-hidden="true"></i> Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                                class="icon wb-print" aria-hidden="true"></i> Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                                class="icon wb-heart" aria-hidden="true"></i> Something else
                                        here</a>
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                                class="icon wb-share" aria-hidden="true"></i> Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel Tickets -->
            </div>

            <div class="col-xl-4 col-lg-12">
                <!-- Panel Title -->
                <div class="card card-shadow" id="widgetGmap">
                    <div class="map h-full" id="gmap"></div>
                </div>
                <!-- End Panel Title -->
            </div>
        </div>
    </div>
@endsection







