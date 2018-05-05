@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/css/profile.css') }}">
@endsection
@section('content')
    {{--<div class="page-header">--}}
        {{--<h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>@lang('student.manage_student')</h1>--}}
    {{--</div>--}}
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <!-- Page Widget -->
                <div class="card card-shadow text-center">
                    <div class="card-block">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                            <img src="{{ asset('v1/images/1.jpg') }}" alt="...">
                        </a>
                        <h4 class="profile-user">Terrance arnold</h4>
                        <p class="profile-job">Art director</p>
                        <p>Hi! I'm Adrian the Senior UI Designer at AmazingSurge. We hope
                            you enjoy the design and quality of Social.</p>
                        <div class="profile-social">
                            <a class="icon bd-twitter" href="javascript:void(0)"></a>
                            <a class="icon bd-facebook" href="javascript:void(0)"></a>
                            <a class="icon bd-dribbble" href="javascript:void(0)"></a>
                            <a class="icon bd-github" href="javascript:void(0)"></a>
                        </div>
                        <button type="button" class="btn btn-primary">Follow</button>
                    </div>
                    <div class="card-footer">
                        <div class="row no-space">
                            <div class="col-4">
                                <strong class="profile-stat-count">260</strong>
                                <span>Follower</span>
                            </div>
                            <div class="col-4">
                                <strong class="profile-stat-count">180</strong>
                                <span>Following</span>
                            </div>
                            <div class="col-4">
                                <strong class="profile-stat-count">2000</strong>
                                <span>Tweets</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Widget -->
            </div>
            <div class="col-lg-9">
                <!-- Panel -->
                <div class="panel">
                    <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                        <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#activities" aria-controls="activities" role="tab">Activities <span class="badge badge-pill badge-danger">5</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Profile</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#messages" aria-controls="messages" role="tab">Messages</a></li>
                            <li class="nav-item dropdown" style="display: none;">
                                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" data-toggle="tab" href="#activities" aria-controls="activities" role="tab">Activities <span class="badge badge-pill badge-danger">5</span></a>
                                    <a class="dropdown-item" data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Profile</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#messages" aria-controls="messages" role="tab">Messages</a>
                                </div>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="pr-20">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-fluid" src="{{ asset('v1/images/1.jpg') }}" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-5">Ida Fleming
                                                    <small>posted an new activity comment</small>
                                                </h5>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">Cras sit amet nibh libero, in gravida nulla. Nulla
                                                    vel metus.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)" role="button">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('body').addClass('page-profile')
    </script>
@endsection






