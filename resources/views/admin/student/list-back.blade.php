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
                        <th></th>
                        <th>@lang('planDetail.school_name')</th>
                        <th>@lang('planDetail.year')</th>
                        <th>@lang('planDetail.batch')</th>
                        <th>@lang('planDetail.admit')</th>
                        <th>@lang('planDetail.major')</th>
                        <th>@lang('planDetail.planNumbers')</th>
                        <th>@lang('planDetail.lowest')</th>
                        <th>@lang('planDetail.lowRanking')</th>
                        <th>@lang('planDetail.average')</th>
                        <th>@lang('planDetail.averageLine')</th>
                        <th>@lang('planDetail.advantage')</th>
                        <th>@lang('planDetail.explain')</th>
                    </tr>
                    </thead>
                    @if(isset($lists))
                        @foreach($lists as $list)
                            <tbody class="table-section" data-plugin="tableSection">
                            <tr align="center">
                                <td>
                            <span class="checkbox-custom checkbox-primary">
                              <input class="selectable-item" type="checkbox" id="row-{{ $list['_id'] }}" value="{{ $list['_id'] }}"><label for="row-{{ $list['_id'] }}"></label>
                            </span>
                                </td>
                                <td class="text-center"><i class="table-section-arrow"></i></td>
                                <td>{{ $list['school'] }}</td>
                                <td>{{ $list['year'] }}</td>
                                <td>{{ $list['batch'] }}</td>
                                <td>{{ $list['subject'] }}</td>
                                <td>{{ $list['major'] }}</td>
                                <td>{{ $list['planNumbers'] }}</td>
                                <td>{{ $list['lowest'] }}</td>
                                <td>{{ $list['lowRanking'] }}</td>
                                <td>{{ $list['average'] }}</td>
                                <td>{{ $list['averageLine'] }}</td>
                                <td>{{ $list['advantage'] }}</td>
                                <td>{{ $list['explain'] }}</td>
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






