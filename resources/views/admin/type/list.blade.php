<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr align="center">
        <th>@lang('form.id')</th>
        <th>@lang('type.name')</th>
        <th>@lang('type.desc')</th>
        <th>@lang('type.open')</th>
        <th class="hidden-sm-down">@lang('form.created_at')</th>
        <th>@lang('form.action')</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($types))
        @foreach($types as $type)
            <tr align="center" class="tr-{{ $type['id'] }}">
                <td>{{ $type['id'] }}</td>
                <td>{{ $type['name'] }}</td>
                <td>{{ $type['desc'] or '未填写'}}</td>
                <td>
                    @if( $type['open']== 1)
                        <button class="btn btn-xs btn-success" type="button">已启用</button>
                    @else
                        <button class="btn btn-xs btn-danger" type="button">已关闭</button>
                    @endif
                </td>
                <td class="hidden-sm-down">{{ $type['created_at']  }}</td>
                <td>
                    <a href="{{route('admin.type.edit',['id'=>$type['id']])}}" class="btn btn-outline btn-primary btn-xs"><i class="icon wb-pencil" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)" onclick="deleteOne({{ $type['id'] }})" class="btn btn-outline btn-warning btn-xs"><i class="icon wb-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
    @else
        <tr align="center">
            <td colspan="6">@lang('form.nodata')</td>
        </tr>
    @endif
    </tbody>
</table>