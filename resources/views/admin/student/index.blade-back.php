@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/vendor/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/vendor/formvalidation/formValidation.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/css/forms/validation.css') }}">
@endsection
@section('content')
    <div class="page-header">
        <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>@lang('student.list_student')</h1>
        <div class="page-header-actions">
            <a href="" class="btn btn-sm btn-icon btn-default btn-outline btn-round" data-original-title="@lang('admin.student.back_student_list')">
                <i class="icon wb-reply" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="panel">
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-12">
                    <!-- Example Default Button -->
                    <div class="example-wrap">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-xl-2">
                                <div class="example">
                                    <ul class="list-unstyled">
                                        <li class="mb-20">
                                            <button type="button" class="btn btn-block btn-primary">Primary</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-xl-2">
                                <div class="example">
                                    <ul class="list-unstyled">
                                        <li class="mb-20">
                                            <button type="button" class="btn btn-block btn-success">Success</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-xl-2">
                                <div class="example">
                                    <ul class="list-unstyled">
                                        <li class="mb-20">
                                            <button type="button" class="btn btn-block btn-info">Info</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Example Default Button -->
                </div>
            </div>

        </div>
    </div>

@endsection
@section('js')
@endsection






