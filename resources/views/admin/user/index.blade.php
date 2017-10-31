@extends('admin.public.parent')

@section('content')
	<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">斑马线</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>用户ID</th>
                            <th>昵称</th>
                            <th>电话</th>
                            <th>密码</th>
                            <th>性别</th>
                            <th>头像</th>
                            <th>生日</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($user_infos as $user)
                        
                            <tr class="gradeX">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->uid }}</td>
                                <td>{{ $user->nickname }}</td>
                                <td>{{ $user->tel }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ ($user->sex==1)?'男':'女' }}</td>
                                <td>{{ $user->photo }}</td>
                                <td>{{ $user->birthday }}</td>
                                <td>
                                    <div class="tpl-table-black-operation">
                                        <a href="javascript:;">
                                            <i class="am-icon-pencil"></i> 编辑
                                        </a>
                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                            <i class="am-icon-trash"></i> 删除
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <!-- more data -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

