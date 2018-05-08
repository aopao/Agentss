@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/vendor/formvalidation/formValidation.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/vendor/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/css/forms/validation.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/vendor/select2/select2.css') }}">
@endsection
@section('content')
    <div class="page-header">
        <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>@lang('student.create_student')</h1>
        <div class="page-header-actions">
            <a href="{{ route('admin.student.index') }}" class="btn btn-sm btn-icon btn-primary btn-outline btn-round" data-original-title="@lang('student.back_student_list')">
                <i class="icon wb-reply" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="page-content">
        <form action="{{ route('admin.student.store') }}" method="post">
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">@lang('student.student_basic_info')</h3>
                </header>
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="row">
                                        <div class="form-group col-md-3 ">
                                            <label class="form-control-label" for="inputName">@lang('student.name')：</label>
                                            <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'focus' }}" id="inputName" name="name" placeholder="@lang('student.name')" autocomplete="off">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label class="form-control-label" for="inputAge">@lang('student.age')：</label>
                                            <input type="text" class="form-control {{ $errors->has('age')?'is-invalid':'focus' }}" id="inputAge" name="age" placeholder="@lang('student.age')" autocomplete="off">
                                            @if ($errors->has('age'))
                                                <div class="invalid-feedback">{{ $errors->first('age') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label class="form-control-label" for="inputNation">@lang('student.nation')：</label>
                                            <input type="text" class="form-control" id="inputNation" name="nation" placeholder="@lang('student.nation')" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label class="form-control-label" for="inputCard">@lang('student.card')：</label>
                                            <input type="text" class="form-control" id="inputCard" name="card" placeholder="@lang('student.card')" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label class="form-control-label" for="inputProvince">@lang('student.province')：</label>
                                            <input type="text" class="form-control" id="inputProvince" name="province" placeholder="@lang('student.province')" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label class="form-control-label" for="inputContact">@lang('student.contact')：</label>
                                            <input type="text" class="form-control" id="inputContact" name="contact" placeholder="@lang('student.contact')" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label class="form-control-label" for="inputMobile">@lang('student.mobile')：</label>
                                            <input type="text" class="form-control" id="inputMobile" name="mobile" placeholder="@lang('student.mobile')" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label class="form-control-label" for="inputSchool">@lang('student.school')：</label>
                                            <input type="text" class="form-control" id="inputSchool" name="school" placeholder="@lang('student.school')" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label" for="inputSex">@lang('student.sex')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSex" checked name="sex" value="1">
                                                    <label for="inputSex">@lang('student.female')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSex" name="sex" value="0">
                                                    <label for="inputBasicFemale">@lang('student.male')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="form-control-label" for="inputAdmitted">@lang('student.admitted')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputAdmitted" name="admitted" checked value="0">
                                                    <label for="inputAdmitted">@lang('student.arts')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputAdmitted" name="admitted" value="1">
                                                    <label for="inputAdmitted">@lang('student.science')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 form-inline">
                                            <label class="form-control-label">@lang('student.census')：&nbsp;</label>
                                            <div>
                                                <select class="form-control" name="province_id" data-plugin="select2" id="province" style="width: 150px">
                                                    @foreach($provinces as $value)
                                                        <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="ml-15">
                                                <select class="form-control" name="city_id" data-plugin="select2" id="city" style="width: 150px">
                                                    <option value="0">@lang('student.orselect')</option>
                                                </select>
                                            </div>
                                            <div class="ml-15">
                                                <select class="form-control" name="area_id" data-plugin="select2" id="area" style="width: 150px">
                                                    <option value="0">@lang('student.orselect')</option>
                                                </select>
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
                    <h3 class="panel-title">@lang('student.student_score_info')</h3>
                </header>
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="form-control-label" for="inputBranchs">@lang('student.branchs')：</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputBranchs" name="branchs" placeholder="@lang('student.branchs')" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputBranchs" name="branchs" placeholder="@lang('student.branchs')" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="form-control-label" for="inputSeats">@lang('student.seats')：</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputSeats" name="seats" placeholder="@lang('student.seats')" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputSeats" name="seats" placeholder="@lang('student.seats')" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="form-control-label" for="inputSimulate1">@lang('student.simulate1_score')/@lang('student.simulate1_rank')：</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputSimulate1Score" name="simulate1_score" placeholder="@lang('student.simulate1_score')" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputSimulate1Rank" name="simulate1_rank" placeholder="@lang('student.simulate1_rank')" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="form-control-label" for="inputSimuate2">@lang('student.simulate2_score')/@lang('student.simulate2_rank')：</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputSimulate2Score" name="simulate2_score" placeholder="@lang('student.simulate2_score')" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputSimulate2Rank" name="simulate2_rank" placeholder="@lang('student.simulate2_rank')" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="form-control-label" for="inputSimulate3">@lang('student.simulate3_score')/@lang('student.simulate3_rank')：</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputSimulate3Score" name="simulate3_score" placeholder="@lang('student.simulate3_score')" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputSimulate3Rank" name="simulate3_rank" placeholder="@lang('student.simulate3_rank')" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-control-label" for="inputScore">@lang('student.score')：</label>
                                    <input type="text" class="form-control" id="inputScore" name="score" placeholder="@lang('student.score')" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">@lang('student.student_exam_info')</h3>
                </header>
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-3 ">
                                    <label class="form-control-label" for="inputGkscore">@lang('student.gkscore')：</label>
                                    <input type="text" class="form-control" id="inputGkscore" name="gkscore" placeholder="@lang('student.gkscore')" autocomplete="off">
                                </div>
                                <div class="form-group col-md-3 ">
                                    <label class="form-control-label" for="inputRank">@lang('student.rank')：</label>
                                    <input type="text" class="form-control" id="inputRank" name="rank" placeholder="@lang('student.rank')" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">@lang('student.student_purpose_info')</h3>
                </header>
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputSelect1">@lang('student.select1')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect1" checked name="select1" value="1">
                                                    <label for="inputSelect1">@lang('form.no')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect1" name="select1" value="0">
                                                    <label for="inputSelect1">@lang('form.yes')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputSelect2">@lang('student.select2')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect2" checked name="select2" value="1">
                                                    <label for="inputSelect2">@lang('form.no')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect2" name="select2" value="0">
                                                    <label for="inputSelect2">@lang('form.yes')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputSelect3">@lang('student.select3')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect3" checked name="select3" value="1">
                                                    <label for="inputSelect3">@lang('form.no')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect3" name="select3" value="0">
                                                    <label for="inputSelect3">@lang('form.yes')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputSelect4">@lang('student.select4')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect4" checked name="select4" value="1">
                                                    <label for="inputSelect4">@lang('form.no')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect4" name="select4" value="0">
                                                    <label for="inputSelect4">@lang('form.yes')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputSelect5">@lang('student.select5')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect5" checked name="select5" value="1">
                                                    <label for="inputSelect5">@lang('form.no')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect5" name="select5" value="0">
                                                    <label for="inputSelect5">@lang('form.yes')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputSelect6">@lang('student.select6')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect6" checked name="select6" value="1">
                                                    <label for="inputSelect6">@lang('form.no')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSelect6" name="select6" value="0">
                                                    <label for="inputSelect6">@lang('form.yes')</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label" for="inputMajorSort">@lang('student.major_sort')：</label>
                                            <div>
                                                <textarea class="form-control" name="major_sort" id="inputMajorSort" rows="3" data-fv-field="major_sort"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label" for="inputSchoolSort">@lang('student.school_sort')：</label>
                                            <div>
                                                <textarea class="form-control" id="inputSchoolSort" name="school_sort" rows="3" data-fv-field="school_sort"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label" for="inputMedicalNote">@lang('student.medical_note')：</label>
                                            <div>
                                                <textarea class="form-control" id="inputMedicalNote" name="medical_note" rows="3" data-fv-field="medical_note"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label" for="inputOtherNote">@lang('student.other_note')：</label>
                                            <div>
                                                <textarea class="form-control" id="inputOtherNote" name="other_note" rows="3" data-fv-field="other_note"></textarea>
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
                    <h3 class="panel-title">@lang('student.student_active_info')</h3>
                </header>
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputContact">@lang('student.created_at')：</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" disabled value="{{ date('Y-m-d H:i:s',time()) }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputContact">@lang('student.active_date')：</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" disabled value="{{ date('Y-m-d',time()) }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-control-label" for="inputContact">@lang('student.endtime')：</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" data-plugin="datepicker" id="Datepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="row">
                                        <div>
                                            {{ csrf_field() }}
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="submit" style="margin: 0px auto;display: table;" class="btn btn-primary" value="@lang('form.create')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="{{ asset('v1/vendor/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('v1/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script>
        $("#province").on("change", function () {
            provinceId = $("#province").val();
            $.get("{{route('admin.region.city')}}", {id: provinceId, html: true},
                function (data) {
                    $("#city").html(data)
                });
        });
        $("#city").on("change", function () {
            cityId = $("#city").val();
            $.get("{{route('admin.region.area')}}", {id: cityId, html: true},
                function (data) {
                    $("#area").html(data)
                });
        });
        $("#datepicker").datepicker({format: 'yyyy-mm-dd'});
    </script>
@endsection






