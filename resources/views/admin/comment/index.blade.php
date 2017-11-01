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
                               <a href="{{ url('admin/comment/create') }}"><input type="submit" class="am-btn am-btn-default am-btn-success" value="新增评论"> </a>                                         
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
                    <form action="{{ url('/admin/comment') }}" method="get">
                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                            <input type="text" name="uid"  class="am-form-field" placeholder="请输入用户名搜索">
                            <span class="am-input-group-btn">
                                <input class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit" value="搜索">
                            </span>
                        </div>
                    </form>
                </div>
                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                    <thead>
                        <tr>
                            <th>评论ID</th>
                            <th>用户ID</th>
                            <th>文章ID</th>
                            <th>评论内容</th>
                            <th>评论时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($index as $comment)
                        
                            <tr class="gradeX">
                                <td>{{ $comment->cid }}</td>
                                <td>{{ $comment->uid }}</td>
                                <td>{{ $comment->aid }}</td>
                                <td>{{ $comment->c_content }}</td>
                                <td>{{ $comment->c_time }}</td>
                                <td>
                                    <div class="tpl-table-black-operation">
                                        <a href="{{ url('admin/comment/'.$comment->cid.'/edit/') }}">
                                            <i class="am-icon-pencil"></i> 修改
                                        </a>
                                        <a href="javascript:doDelcomment({{ $comment->cid }});" class="tpl-table-black-operation-del">
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
        function doDelcomment(cid)
        {
            if(confirm('你确定要删除吗？')){
                var form = document.myform;
                form.action = 'comment/'+cid;
                form.submit();
            }
        }
    </script>
    <!-- if(confirm('你确定要删除吗？')){
    $.get("{{ url('admin/users/')}}",{'id':id},function(data){
        if (data) {
            window.location = '/admin/user';
        }
    });
} -->

@endsection

