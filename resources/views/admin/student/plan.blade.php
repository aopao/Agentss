@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('v1/css/sweetalert.css') }}">
@endsection
@section('content')
    <div class="page-content container-fluid">
        <div class="page-header">
            <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>{{ $info['name'] }}@lang('student.profie_info')</h1>
            <div class="page-header-actions">
                <a href="{{ route('admin.student.index') }}" class="btn btn-sm btn-icon btn-primary btn-outline btn-round" title="@lang('type.back_type_list')">
                    <i class="icon wb-reply" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Panel -->
                <div class="panel">
                    <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                        <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                            <li class="nav-item" role="presentation"><a href="{{ route('admin.student.show',['id'=>$info['id']]) }}" class="nav-link">@lang('student.student_info')</a></li>
                            @if(isset($type_list))
                                @foreach($type_list as $name=>$id)
                                    <li class="nav-item" role="presentation"><a class="nav-link @if($id==$type_id) active @endif" href="{{ route('admin.plane.index',['id'=>$info['id'],'plane_id'=>$id]) }}" aria-controls="info" role="tab">{{ $name }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active animation-slide-left">
                                <div class="panel-body p-1 pt-10">
                                    <div class="card-block pl-0 pt-0 pb-10">
                                        <div class="project-controls clearfix">
                                            <div class="float-left">
                                                <a href="javascript:void(0)" id="create_plan" class="btn btn-outline btn-success btn-sm">@lang('plan.create_plan')</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="">
                                        <table class="table table-hover table-bordered table-striped">
                                            <thead>
                                            <tr align="center">
                                                <th>@lang('plan.number')</th>
                                                <th>@lang('plan.user')</th>
                                                <th>@lang('plan.name')</th>
                                                <th class="hidden-sm-down">@lang('plan.producer')</th>
                                                <th class="hidden-sm-down">@lang('form.created_at')</th>
                                                <th>@lang('form.action')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($plan_list))
                                                @foreach($plan_list as $value)
                                                    <tr align="center">
                                                        <td>{{ $value['number'] }}</td>
                                                        <td>{{ $value['student']['name'] }}</td>
                                                        <td>{{ $value['name'] }}</td>
                                                        <td class="hidden-sm-down">{{ $value['user']['nickname'] }}</td>
                                                        <td class="hidden-sm-down">{{ $value['created_at'] }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.plane.detail',['id'=>$info['id'],'plan_id'=>$value['id']]) }}" class="btn btn-outline btn-success btn-xs"><i class="icon wb-eye" aria-hidden="true"></i></a>
                                                            <a href="http://dahan.me/admin/student/1" class="btn btn-outline btn-warning btn-xs"><i class="icon wb-trash" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <div class="card-block p-0">
                                <div class="project-controls clearfix" style="border: none">
                                    <div class="float-right">
                                        <nav>
                                            {{ $plan_list->links() }}
                                        </nav>
                                    </div>
                                </div>
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
    <script src="{{ asset('v1/js/sweetalert.js') }}"></script>
    <script>
        $('body').addClass('page-profile');
        url = '{{ route('admin.plane.cretae',['id'=>$info['id'],'type_id'=>$type_id]) }}';
        $('#create_plan').click(function () {
            $.ajax({
                url: url,
                type: 'POST',
                data: {'_token': '{{ csrf_token() }}'},
                success: function (data) {
                    if (data['status'] == 1) {
                        swal({title: "添加成功！", text: "1秒后自动关闭。", timer: 1000, showConfirmButton: false});
                        location.reload()
                    }
                }
            });
        })
    </script>
@endsection






