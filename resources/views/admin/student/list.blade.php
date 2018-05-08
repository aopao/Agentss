@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/css/student.css') }}">
@endsection
@section('content')
    <div class="page-header">
        <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>@lang('plan.search_college')</h1>
    </div>
    <div class="panel">
        <div class="card-block ">
            <div class="project-controls clearfix">
                <div class="float-left">
                    <a href="{{ route('admin.student.create') }}" class="btn btn-sm btn-outline btn-primary">@lang('plan.add_plan')</a>
                </div>
            </div>
        </div>
        <div class="panel-body pt-0">
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
                        <th></th>
                        <th>@lang('student.name')</th>
                        <th>@lang('student.province')</th>
                        <th>@lang('student.mobile')</th>
                        <th class="hidden-sm-down">@lang('student.card')</th>
                        <th>@lang('student.planner')</th>
                        <th class="hidden-sm-down">@lang('form.created_at')</th>
                        <th>@lang('form.action')</th>
                    </tr>
                    </thead>
                    @if(isset($students))
                        @foreach($students as $student)
                            <tbody class="table-section" data-plugin="tableSection">
                            <tr align="center">
                                <td>
                            <span class="checkbox-custom checkbox-primary">
                              <input class="selectable-item" type="checkbox" id="row-{{ $student['id'] }}" value="{{ $student['id'] }}"><label for="row-{{ $student['id'] }}"></label>
                            </span>
                                </td>
                                <td class="text-center"><i class="table-section-arrow"></i></td>
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
                            </tbody>
                            <tbody>
                            <tr align="center">
                                <td>
                            <span class="checkbox-custom checkbox-primary">
                              <input class="selectable-item" type="checkbox" id="row-1" value="1"><label for="row-1"></label>
                            </span>
                                </td>
                                <td class="text-center"></td>
                                <td>1</td>
                                <td>张三</td>
                                <td>北京市</td>
                                <td></td>
                                <td class="hidden-sm-down"></td>
                                <td>鲁创信息科技有限公司-郭放</td>
                                <td class="hidden-sm-down">2018-05-07 12:36:47</td>
                                <td>
                                    <a href="http://dahan.me/admin/student/1" class="btn btn-outline btn-success btn-xs"><i class="icon wb-eye" aria-hidden="true"></i></a>
                                    <a href="http://dahan.me/admin/student/1/edit" class="btn btn-outline btn-primary btn-xs"><i class="icon wb-pencil" aria-hidden="true"></i></a>
                                    <a href="http://dahan.me/admin/student/1" class="btn btn-outline btn-warning btn-xs"><i class="icon wb-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    @endif
                </table>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('v1/js/Plugin/table.js') }}"></script>
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






