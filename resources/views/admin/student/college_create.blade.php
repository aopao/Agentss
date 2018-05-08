@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/css/student.css') }}">
@endsection
@section('content')
    <div class="page-header">
        <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>{{ $student['name'] }} - {{ $plan['name'] }}@lang('plan.create')</h1>
    </div>
    <form action="{{ route('admin.plane.detail.search',['id'=> $student['id'],'plane_id'=>$plan['id']]) }}" method="get">
        <div class="panel">
            <header class="panel-heading">
                <h3 class="panel-title">@lang('plan.options')</h3>
            </header>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-3 ">
                                <label class="form-control-label" for="inputSchoolName">@lang('plan.school_name')：</label>
                                <input type="text" class="form-control " id="inputSchoolName" name="school_name" required placeholder="@lang('plan.school_name')" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3 ">
                                <label class="form-control-label" for="inputMajorRemark">@lang('plan.major_remark')：</label>
                                <input type="text" class="form-control" id="inputMajorRemark" name="major_remark" placeholder="@lang('plan.major_remark')" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3 ">
                                <label class="form-control-label" for="inputBatchName">@lang('plan.batch_name')：</label>
                                <input type="text" class="form-control" id="inputBatchName" name="batch_name" placeholder="@lang('plan.batch_name')" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3 ">
                                <label class="form-control-label" for="inputProvinceName">@lang('plan.province_name')：</label>
                                <input type="text" class="form-control" id="inputProvinceName" name="province_name" placeholder="@lang('plan.province_name')" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3 ">
                                <label class="form-control-label" for="inputProvinceName">@lang('plan.city_name')：</label>
                                <input type="text" class="form-control" id="inputProvinceName" name="city_name" placeholder="@lang('plan.city_name')" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3 ">
                                <label class="form-control-label" for="inputProvinceName">@lang('plan.admitted')：</label>
                                <input type="text" class="form-control" id="inputProvinceName" name="admitted" disabled value="@if($student['admitted']==0) @lang('student.arts') @else @lang('student.science') @endif" placeholder="@lang('plan.admitted')" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label" for="inputBranchs">@lang('plan.begin_score')：</label>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputBranchs" name="begin_score" required placeholder="@lang('plan.begin_score')" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputBranchs" name="end_score"  placeholder="@lang('plan.end_score')" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="row">
                            <div>
                                {{ csrf_field() }}
                                <input type="hidden" name="plan_id" value="{{ $plan['id'] }}">
                                <input type="hidden" name="student_id" value="{{ $student['id'] }}">
                                <input type="submit" style="margin: 0px auto;display: table;" class="btn btn-primary" value="@lang('form.search_college')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('js')
    <script>
        $(".selectable-all").on("change", function () {
            if ($(".selectable-all").is(':checked')) {
                $('.selectable-item').attr("checked", "checked");
            } else {
                $('.selectable-item').attr("checked", false);
            }
        });

    </script>
@endsection






