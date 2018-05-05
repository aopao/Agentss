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
                        <h4 class="profile-user">{{ $info['name'] }}</h4>
                        <p>
                            <span><i class="icon wb-map"></i> {{ $info['province']['name'] or '未知' }}</span>
                            <span class="ml-3"><i class="icon wb-emoticon"></i> @if($info['sex'] == 0) 女 @else 男 @endif</span>
                            <span class="ml-3"><i class="icon wb-dashboard"></i> {{ $info['nation'] or '未知' }}</span>
                        </p>
                        <p class="profile-job">
                            <span><i class="icon wb-user"></i> {{ $info['contact'] or '暂时没有联系人' }}</span>
                            <span><i class="icon wb-mobile"></i> {{ $info['mobile'] or '暂时没有联系方式' }}</span>
                        </p>
                        {{--<button type="button" class="btn btn-primary">新建方案</button>--}}
                    </div>
                    <div class="card-footer">
                        <div class="row no-space">
                            <div class="col-4">
                                <strong class="profile-stat-count">323</strong>
                                <span>@lang('student.simulate_plan')</span>
                            </div>
                            <div class="col-4">
                                <strong class="profile-stat-count">232</strong>
                                <span>@lang('student.forecast_plan')</span>
                            </div>
                            <div class="col-4">
                                <strong class="profile-stat-count">454</strong>
                                <span>@lang('student.know_plan')</span>
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
                            <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#info" aria-controls="info" role="tab">@lang('student.student_info')</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#simulatePlan" aria-controls="simulatePlan" role="tab">@lang('student.simulate_plan')</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#forecastPlan" aria-controls="forecastPlan" role="tab">@lang('student.forecast_plan')</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#knowPlan" aria-controls="knowPlan" role="tab">@lang('student.know_plan')</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#collegePlan" aria-controls="collegePlan" role="tab">@lang('student.college_plan')</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#majorPlan" aria-controls="majorPlan" role="tab">@lang('student.major_plan')</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active animation-slide-left" id="info" role="tabpanel">
                                <div class="panel">
                                    <header class="panel-heading">
                                        <h3 class="panel-title pl-0 pb-0">@lang('student.planner')</h3>
                                    </header>
                                    <div class="panel-body container-fluid pl-0 pb-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-12 pt-20">
                                                        <input type="text" class="form-control" name="planer" value="{{ $info['user']['nickname'] }}" disabled placeholder="@lang('student.name')" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading">
                                        <h3 class="panel-title pl-0 pb-0">@lang('student.student_basic_info')</h3>
                                    </header>
                                    <div class="panel-body container-fluid pl-0 pb-0">
                                        <div class="row row-lg">
                                            <div class="col-md-12">
                                                <div class="example-wrap">
                                                    <div class="example">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputName">@lang('student.name')：</label>
                                                                <input type="text" class="form-control" id="inputName" name="name" value="{{ $info['name'] or '未填' }}" disabled placeholder="@lang('student.name')" autocomplete="off">
                                                                @if ($errors->has('name'))
                                                                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputAge">@lang('student.age')：</label>
                                                                <input type="text" class="form-control" id="inputAge" name="age" value="{{ $info['age'] or '未填' }}" disabled placeholder="@lang('student.age')" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputNation">@lang('student.nation')：</label>
                                                                <input type="text" class="form-control" id="inputNation" name="nation" value="{{ $info['nation'] or '未填' }}" disabled placeholder="@lang('student.nation')" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputCard">@lang('student.card')：</label>
                                                                <input type="text" class="form-control" id="inputCard" name="card" value="{{ $info['card'] or '未填' }}" disabled placeholder="@lang('student.card')" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputProvince">@lang('student.province')：</label>
                                                                <input type="text" class="form-control" id="inputProvince" name="province" value="{{ $info['province']['name'] or '未填' }}" disabled placeholder="@lang('student.province')" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputContact">@lang('student.contact')：</label>
                                                                <input type="text" class="form-control" id="inputContact" name="contact" value="{{ $info['contact'] or '未填' }}" disabled placeholder="@lang('student.contact')" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputMobile">@lang('student.mobile')：</label>
                                                                <input type="text" class="form-control" id="inputMobile" name="mobile" value="{{ $info['mobile'] or '未填' }}" disabled placeholder="@lang('student.mobile')" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputSchool">@lang('student.school')：</label>
                                                                <input type="text" class="form-control" id="inputSchool" name="school" value="{{ $info['school'] or '未填' }}" disabled placeholder="@lang('student.school')" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label" for="inputSex">@lang('student.sex')：</label>
                                                                <div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSex" @if($info['sex'] == 0) checked @endif disabled name="sex" value="1">
                                                                        <label for="inputSex">@lang('student.female')</label>
                                                                    </div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSex" @if($info['sex'] == 1) checked @endif disabled name="sex" value="0">
                                                                        <label for="inputBasicFemale">@lang('student.male')</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6 ">
                                                                <label class="form-control-label" for="inputAdmitted">@lang('student.admitted')：</label>
                                                                <div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputAdmitted" name="admitted" @if($info['admitted'] == 0) checked @endif disabled value="0">
                                                                        <label for="inputAdmitted">@lang('student.arts')</label>
                                                                    </div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputAdmitted" name="admitted" @if($info['admitted'] == 1) checked @endif disabled value="1">
                                                                        <label for="inputAdmitted">@lang('student.science')</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading">
                                        <h3 class="panel-title  pl-0 pb-0">@lang('student.student_score_info')</h3>
                                    </header>
                                    <div class="panel-body container-fluid pl-0 pb-0">
                                        <div class="row row-lg">
                                            <div class="col-md-12">
                                                <div class="example-wrap">
                                                    <div class="example">
                                                        <div class="row">
                                                            <div class="form-group col-md-5">
                                                                <label class="form-control-label" for="inputBranchs">@lang('student.branchs')：</label>
                                                                <div class="form-inline">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputBranchs" name="branchs" value="{{ $info['school'] or '未填' }}" disabled placeholder="@lang('student.branchs')" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputBranchs" name="branchs" value="{{ $info['school'] or '未填' }}" disabled placeholder="@lang('student.branchs')" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label class="form-control-label" for="inputSeats">@lang('student.seats')：</label>
                                                                <div class="form-inline">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputSeats" name="seats" value="{{ $info['seats'] or '未填' }}" disabled placeholder="@lang('student.seats')" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputSeats" name="seats" value="{{ $info['seats'] or '未填' }}" disabled placeholder="@lang('student.seats')" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label class="form-control-label" for="inputSimulate1">@lang('student.simulate1_score')/@lang('student.simulate1_rank')：</label>
                                                                <div class="form-inline">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputSimulate1Score" name="simulate1_score" value="{{ $info['simulate1_score'] or '未填' }}" disabled placeholder="@lang('student.simulate1_score')" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputSimulate1Rank" name="simulate1_rank" value="{{ $info['simulate1_rank'] or '未填' }}" disabled placeholder="@lang('student.simulate1_rank')" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label class="form-control-label" for="inputSimuate2">@lang('student.simulate2_score')/@lang('student.simulate2_rank')：</label>
                                                                <div class="form-inline">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputSimulate2Score" name="simulate2_score" value="{{ $info['simulate2_score'] or '未填' }}" disabled placeholder="@lang('student.simulate2_score')" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputSimulate2Rank" name="simulate2_rank" value="{{ $info['simulate2_rank'] or '未填' }}" disabled placeholder="@lang('student.simulate2_rank')" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label class="form-control-label" for="inputSimulate3">@lang('student.simulate3_score')/@lang('student.simulate3_rank')：</label>
                                                                <div class="form-inline">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputSimulate3Score" name="simulate3_score" value="{{ $info['simulate3_score'] or '未填' }}" disabled placeholder="@lang('student.simulate3_score')" autocomplete="off">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="inputSimulate3Rank" name="simulate3_rank" value="{{ $info['simulate3_rank'] or '未填' }}" disabled placeholder="@lang('student.simulate3_rank')" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputScore">@lang('student.score')：</label>
                                                                <input type="text" class="form-control" id="inputScore" name="score" placeholder="@lang('student.score')" value="{{ $info['score'] or '未填' }}" disabled autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading">
                                        <h3 class="panel-title pl-0 pb-0">@lang('student.student_exam_info')</h3>
                                    </header>
                                    <div class="panel-body container-fluid pl-0 pb-0">
                                        <div class="row row-lg">
                                            <div class="col-md-12">
                                                <div class="example-wrap">
                                                    <div class="example">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputGkscore">@lang('student.gkscore')：</label>
                                                                <input type="text" class="form-control" id="inputGkscore" name="gkscore" value="{{ $info['gkscore'] or '未填' }}" disabled placeholder="@lang('student.gkscore')" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-3 ">
                                                                <label class="form-control-label" for="inputRank">@lang('student.rank')：</label>
                                                                <input type="text" class="form-control" id="inputRank" name="rank" value="{{ $info['rank'] or '未填' }}" disabled placeholder="@lang('student.rank')" autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading">
                                        <h3 class="panel-title pl-0 pb-0">@lang('student.student_purpose_info')</h3>
                                    </header>
                                    <div class="panel-body container-fluid pl-0 pb-0">
                                        <div class="row row-lg">
                                            <div class="col-md-12">
                                                <div class="example-wrap">
                                                    <div class="example">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputSelect1">@lang('student.select1')：</label>
                                                                <div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect1" name="select1" @if($info['select1'] == 0) checked @endif disabled value="1">
                                                                        <label for="inputSelect1">@lang('form.no')</label>
                                                                    </div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect1" name="select1" @if($info['select1'] == 0) checked @endif disabled value="0">
                                                                        <label for="inputSelect1">@lang('form.yes')</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputSelect2">@lang('student.select2')：</label>
                                                                <div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect2" name="select2" @if($info['select2'] == 0) checked @endif disabled value="1">
                                                                        <label for="inputSelect2">@lang('form.no')</label>
                                                                    </div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect2" name="select2" @if($info['select2'] == 0) checked @endif disabled value="0">
                                                                        <label for="inputSelect2">@lang('form.yes')</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputSelect3">@lang('student.select3')：</label>
                                                                <div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect3" name="select3" @if($info['select3'] == 0) checked @endif disabled value="1">
                                                                        <label for="inputSelect3">@lang('form.no')</label>
                                                                    </div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect3" name="select3" @if($info['select3'] == 0) checked @endif disabled value="0">
                                                                        <label for="inputSelect3">@lang('form.yes')</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputSelect4">@lang('student.select4')：</label>
                                                                <div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect4" name="select4" @if($info['select4'] == 0) checked @endif disabled value="1">
                                                                        <label for="inputSelect4">@lang('form.no')</label>
                                                                    </div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect4" name="select4" @if($info['select4'] == 0) checked @endif disabled value="0">
                                                                        <label for="inputSelect4">@lang('form.yes')</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputSelect5">@lang('student.select5')：</label>
                                                                <div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect5" name="select5" @if($info['select5'] == 0) checked @endif disabled value="1">
                                                                        <label for="inputSelect5">@lang('form.no')</label>
                                                                    </div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect5" name="select5" @if($info['select5'] == 0) checked @endif disabled value="0">
                                                                        <label for="inputSelect5">@lang('form.yes')</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputSelect6">@lang('student.select6')：</label>
                                                                <div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect6" name="select6" @if($info['select6'] == 0) checked @endif disabled value="1">
                                                                        <label for="inputSelect6">@lang('form.no')</label>
                                                                    </div>
                                                                    <div class="radio-custom radio-default radio-inline">
                                                                        <input type="radio" id="inputSelect6" name="select6" @if($info['select6'] == 0) checked @endif disabled value="0">
                                                                        <label for="inputSelect6">@lang('form.yes')</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label" for="inputMajorSort">@lang('student.major_sort')：</label>
                                                                <div>
                                                                    <textarea class="form-control" name="major_sort" id="inputMajorSort" rows="3" disabled data-fv-field="major_sort">{{ $info['major_sort'] }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label" for="inputSchoolSort">@lang('student.school_sort')：</label>
                                                                <div>
                                                                    <textarea class="form-control" id="inputSchoolSort" name="school_sort" rows="3" disabled data-fv-field="school_sort">{{ $info['school_sort'] }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label" for="inputMedicalNote">@lang('student.medical_note')：</label>
                                                                <div>
                                                                    <textarea class="form-control" id="inputMedicalNote" name="medical_note" rows="3" disabled data-fv-field="medical_note">{{ $info['medical_note'] }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label" for="inputOtherNote">@lang('student.other_note')：</label>
                                                                <div>
                                                                    <textarea class="form-control" id="inputOtherNote" name="other_note" rows="3" disabled data-fv-field="other_note">{{ $info['other_note'] }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading">
                                        <h3 class="panel-title pl-0 pb-0">@lang('student.student_active_info')</h3>
                                    </header>
                                    <div class="panel-body container-fluid pl-0 pb-0">
                                        <div class="row row-lg">
                                            <div class="col-md-12">
                                                <div class="example-wrap">
                                                    <div class="example">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputContact">@lang('student.created_at')：</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
                                                                    <input type="text" class="form-control" disabled value="{{ $info['created_at'] }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputContact">@lang('student.active_date')：</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
                                                                    <input type="text" class="form-control" disabled value="{{ $info['created_at'] }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="form-control-label" for="inputContact">@lang('student.endtime')：</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
                                                                    <input type="text" class="form-control" value="{{ $info['end_time'] or '终身' }}" disabled data-plugin="datepicker" name="end_time" id="Datepicker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animation-slide-left" id="simulatePlan" role="tabpanel">
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
                                                    vel metus.
                                                </div>
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






