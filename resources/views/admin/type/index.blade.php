@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/vendor/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/css/sweetalert.css') }}">
@endsection
@section('content')
    <div class="page-header">
        <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>@lang('type.list_type')</h1>
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
                        <h3 class="panel-title pl-15">@lang('type.create_type')</h3>
                    </header>
                    <form action="{{ route('admin.type.store') }}" method="post">
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group" style="width: 100%">
                                            <label class="form-control-label" for="inputName">@lang('type.name')：</label>
                                            <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'focus' }}" id="inputName" name="name" placeholder="@lang('type.name')" autocomplete="off">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group" style="width: 100%">
                                            <label class="form-control-label" for="inputDesc">@lang('type.desc')：</label>
                                            <textarea class="form-control" id="inputDesc" name="desc" rows="5" data-fv-field="desc"></textarea>
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
                                            <input type="submit" style="margin: 0px auto;display: table;" class="btn btn-primary" value="@lang('form.create')">
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
    <script src="{{ asset('v1/js/sweetalert.js') }}"></script>
    <script>
        toastr.options = {
            closeButton: false,
            debug: true,
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

        function deleteOne(id) {
            swal({title: "确定删除吗？", text: "你将无法恢复该数据！",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "确定删除！",
                cancelButtonText: "取消删除！",
                closeOnConfirm: false,
                closeOnCancel: false}, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "{{ route('admin.type.index') }}/" + id,
                        type: 'DELETE',
                        data: {'_token': '{{ csrf_token() }}'},
                        success: function (data) {
                            $(".tr-" + id).hide();
                            swal("删除！", "数据删除成功", "success");
                        }
                    });
                }
            });
        }
    </script>


@endsection






