@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/vendor/toastr/toastr.css') }}">
@endsection
@section('content')
    <div class="page-header">
        <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>@lang('type.edit_type')</h1>
        <div class="page-header-actions">
            <a href="{{ route('admin.type.index') }}" class="btn btn-sm btn-icon btn-primary btn-outline btn-round" data-original-title="@lang('type.back_type_list')">
                <i class="icon wb-reply" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-body">
                        @include('admin.type.list')
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title pl-15">@lang('type.edit_type')</h3>
                    </header>
                    <form action="{{ route('admin.type.update',['id'=>$info['id']]) }}" method="post">
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group" style="width: 100%">
                                            <label class="form-control-label" for="inputName">@lang('type.name')：</label>
                                            <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'focus' }}" id="inputName" name="name" value="{{ $info['name'] }}" placeholder="@lang('type.name')" autocomplete="off">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group" style="width: 100%">
                                            <label class="form-control-label" for="inputDesc">@lang('type.desc')：</label>
                                            <textarea class="form-control" id="inputDesc" name="desc" rows="5" data-fv-field="desc">{{ $info['desc'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="form-control-label" for="inputOpen">@lang('type.open')：</label>
                                            <div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSex" checked name="open" value="1">
                                                    <label for="inputSex">@lang('form.yes')</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="inputSex" name="open" value="0">
                                                    <label for="inputBasicFemale">@lang('form.no')</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="row">
                                        <div class="form-group">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <input type="hidden" name="id" value="{{ $info['id'] }}">
                                            <input type="submit" style="margin: 0px auto;display: table;" class="btn btn-primary" value="@lang('form.edit')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('v1/vendor/toastr/toastr.js') }}"></script>
    <script>
        toastr.options = {
            closeButton: false,
            debug: false,
            progressBar: true,
            positionClass: "toast-top-center",
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "2000",
            extendedTimeOut: "100",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        };
        @if(Session::has('message'))
        toastr.success('{{Session::get("message")}}', '');
        @endif
    </script>
@endsection






