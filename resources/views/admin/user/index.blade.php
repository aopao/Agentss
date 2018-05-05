@extends('admin.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('v1/css/user.css') }}">
@endsection
@section('content')
    <div class="page-header">
        <h1 class="page-title"><i class="icon wb-user" aria-hidden="true"></i>@lang('user.manage_user')</h1>
    </div>
    <div class="panel">
        <div class="card-block ">
            <div class="project-controls clearfix">
                <div class="float-left">
                    <a href="{{ route('user.create') }}" class="btn btn-outline btn-primary">@lang('user.create_user')</a>
                    <a href="{{ route('user.index') }}" class="btn btn-outline btn-info">@lang('form.pro_search')</a>
                </div>
                <div class="float-right">
                    <form action="">
                        <div class="form-group mb--1">
                            <div class="input-group">
                                <input type="text" class="form-control" name="key" value="{{ $key or '' }}" placeholder="@lang('user.search_tips')">
                                <span class="input-group-btn">
                                    <input type="submit" class="btn btn-primary" value="搜索"/>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body pt-0">
            <!-- Example Table Selectable -->
            <div class="example mt--1">
                <form action="">
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                        <tr align="center">
                            <th class="w-50">
                            <span class="checkbox-custom checkbox-primary">
                              <input class="selectable-all" type="checkbox">
                              <label></label>
                            </span>
                            </th>
                            <th>@lang('form.id')</th>
                            <th>@lang('user.username')</th>
                            <th>@lang('user.phone')</th>
                            <th>@lang('user.nickname')</th>
                            <th class="hidden-sm-down">@lang('user.email')</th>
                            <th>@lang('user.province')</th>
                            <th class="hidden-sm-down">@lang('form.created_at')</th>
                            <th class="hidden-sm-down">@lang('form.status')</th>
                            <th>@lang('form.action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr align="center">
                                <td>
                            <span class="checkbox-custom checkbox-primary">
                              <input class="selectable-item" type="checkbox" id="row-{{ $user['id'] }}" value="{{ $user['id'] }}">
                              <label for="row-{{ $user['id'] }}"></label>
                            </span>
                                </td>
                                <td>{{ $user['id'] }}</td>
                                <td>{{ $user['username'] }}</td>
                                <td>{{ $user['phone'] }}</td>
                                <td>{{ $user['province'] }}</td>
                                <td>{{ $user['nickname'] }}</td>
                                <td class="hidden-sm-down">{{ $user['email'] }}</td>
                                <td>{{ $user['province_id'] }}</td>
                                <td class="hidden-sm-down">{{ $user['created_at']  }}</td>
                                <td>
                                    <a href="{{route('user.show',['id'=>$user['id']])}}" class="btn btn-outline btn-success btn-xs"><i class="icon wb-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('user.edit',['id'=>$user['id']])}}" class="btn btn-outline btn-primary btn-xs"><i class="icon wb-pencil" aria-hidden="true"></i></a>
                                    <a href="{{route('user.destroy',['id'=>$user['id']])}}" class="btn btn-outline btn-warning btn-xs"><i class="icon wb-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="card-block p-0">
                <div class="project-controls clearfix" style="border: none">
                    <div class="float-left">
                        <a href="{{ route('user.create') }}" class="btn btn-outline btn-info">@lang('user.change_agent')</a>
                    </div>
                    <div class="float-right">
                        <nav>
                            @if(isset($key))
                                {!! $users->appends(['key'=>$key])->render() !!}
                            @else
                                {{ $users->links() }}
                            @endif
                        </nav>
                    </div>
                </div>
            </div>
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






