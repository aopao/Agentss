@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/css/student.css') }}">
@endsection
@section('content')
    <div class="page-header">
        <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>{{$info['name']}}@lang('plan.list')</h1>
    </div>
    <div class="panel">
        <div class="card-block ">
            <div class="project-controls clearfix">
                <div class="float-left">
                    <a href="{{ route('admin.plane.detail.create',['id'=>$student_id,'plan_id'=>$plan_id]) }}" class="btn btn-outline btn-primary">@lang('plan.add_school')</a>
                </div>
            </div>
        </div>
        <div class="panel-body pt-0">
            <!-- Example Table Selectable -->
            <form action="">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                    <tr align="center">
                        <th class="w-50">
                            <span class="checkbox-custom checkbox-primary">
                              <input class="selectable-all" type="checkbox"><label></label>
                            </span>
                        </th>
                        <th>@lang('form.id')</th>
                        <th>@lang('student.name')</th>
                        <th>@lang('student.province')</th>
                        <th>@lang('student.mobile')</th>
                        <th class="hidden-sm-down">@lang('student.card')</th>
                        <th>@lang('student.planner')</th>
                        <th class="hidden-sm-down">@lang('form.created_at')</th>
                        <th>@lang('form.action')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($students))
                        @foreach($students as $student)
                            <tr align="center">
                                <td>
                                <span class="checkbox-custom checkbox-primary">
                                  <input class="selectable-item" type="checkbox" id="row-{{ $student['id'] }}" value="{{ $student['id'] }}"><label for="row-{{ $student['id'] }}"></label>
                                </span>
                                </td>
                                <td>{{ $student['id'] }}</td>
                                <td>{{ $student['name'] }}</td>
                                <td>{{ $student['province']['name'] }}</td>
                                <td>{{ $student['mobile'] }}</td>
                                <td class="hidden-sm-down">{{ $student['card'] }}</td>
                                <td>{{ $student['user']['nickname'] }}</td>
                                <td class="hidden-sm-down">{{ $student['created_at']  }}</td>
                                <td>
                                    <a href="{{route('admin.student.show',['id'=>$student['id']])}}" class="btn btn-outline btn-success btn-xs"><i class="icon wb-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('admin.student.edit',['id'=>$student['id']])}}" class="btn btn-outline btn-primary btn-xs"><i class="icon wb-pencil" aria-hidden="true"></i></a>
                                    <a href="{{route('admin.student.destroy',['id'=>$student['id']])}}" class="btn btn-outline btn-warning btn-xs"><i class="icon wb-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </form>
            <!-- End Example Table Selectable -->
        </div>
    </div>
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






