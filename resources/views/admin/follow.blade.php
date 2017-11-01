@extends('admin.public.parent')

@section('content')

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">关注列表</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>作者</th>
                            <th>用户</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($follow as $v) 
                       <tr class="gradeX">
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->user_id }}</td>
                            <td>{{ $v->follow_user_id }}</td>
                            <td>
                                <a href="" class='btn btn-sm'>修改</a>
                                <a href="" class='btn btn-sm'>删除</a>
                            </td>
                       </tr> 
                     @endforeach 
                    </tbody>
                </table>

                 <!-- 分页 -->
               <div class="am-u-lg-12 am-cf">

                    <div class="am-fr">
                        <ul class="am-pagination tpl-pagination">
                            <li class="am-disabled"><a href="">«</a></li>
                            <li class="am-active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="#">3</a></li>
                          
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection