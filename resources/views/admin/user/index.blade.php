@extends('admin.public.parent')

@section('content')

@if (session('msg'))
    <script>
        alert("{{ session('msg') }}")
    </script>
@endif
	<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl"></div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">
                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                    <div class="am-form-group">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs" >
                               <!-- <a href="{{ url('admin/user/create') }}"><input type="submit" class="am-btn am-btn-default am-btn-success" value="用户列表"> </a> -->
                               <a href="{{ url('admin/user') }}"><input type="submit" class="am-btn am-btn-default am-btn-success" value="用户列表"> </a>                                         
                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-6 am-u-lg-2">
                    <div class="am-form-group tpl-table-list-select">
                        
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                    <form name="myform" action="" method="post" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
                    <form action="{{ url('/admin/user/index') }}">
                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                            <input type="text" name="tel"  class="am-form-field" placeholder="请输入手机号搜索">
                            <span class="am-input-group-btn">
                                <input class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit" value="搜索">
                            </span>
                        </div>
                    </form>
                </div>
                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>用户ID</th>
                            <th>昵称</th>
                            <th>电话</th>
                            <th>性别</th>
                            <th>头像</th>
                            <th>生日</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($index as $user)
                        
                            <tr class="gradeX">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->uid }}</td>
                                <td>{{ $user->nickname }}</td>
                                <td>{{ $user->tel }}</td>
                                <td>{{ ($user->sex==1)?'男':'女' }}</td>
                                <td><img src="{{ asset('admin/assets/img/upload/'.$user->u_photo) }}" style="width: 60px;"></td>
                                <td>{{ $user->birthday }}</td>
                                <td>
                                    <div class="tpl-table-black-operation">
                                        <a href="{{ url('admin/user/'.$user->id.'/edit/') }}">
                                            <i class="am-icon-pencil"></i> 查看
                                        </a>
                                        <a href="javascript:doDeluser({{ $user->id }});" class="tpl-table-black-operation-del">
                                            <i class="am-icon-trash"></i> 删除
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <!-- more data -->
                    </tbody>
                </table>
                {!! $index->appends($where)->render() !!}
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function doDeluser(id)
        {
            if(confirm('你确定要删除吗？')){
                $.get("{{ url('admin/users/')}}",{'id':id},function(data){
                    if (data) {
                        window.location = '/admin/user';
                    }
                });
            }
        }
    </script>
@endsection

