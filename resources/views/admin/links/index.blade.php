@extends('admin.public.parent')


@section('content')

<div class="row">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title  am-cf">友情链接</div>
            </div>
            @if (session('msg'))
                <script>
                    alert("{{ session('msg') }}")
                </script>
            @endif
            <div class="widget-body  am-fr">                                 
                <div class="am-u-sm-12">
                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>网站名称</th>
                                <th>链接地址</th>
                                <th>标题</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($links as $k=> $v)
                            <tr class="even gradeC">
                                <td>{{ $v->lid }}</td>
                                <td>{{ $v->link_name }}</td>
                                <td>{{ $v->link_url }}</td>
                                <td>{{ $v->link_title }}</td>
                                <td>
                                    <div type="submit" class="tpl-table-black-operation">
                                        <a href="{{url('admin/links/'.$v->lid.'/edit')}}">
                                            <i class="am-icon-pencil"></i> 编辑
                                        </a>
                                        <a href="javascript:" onclick="delUser({{$v->lid}})" class="tpl-table-black-operation-del">
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
                <div class="am-u-lg-12 am-cf">
                    <div class="am-fr">
                        <ul class="am-pagination tpl-pagination">
                            {!! $links->render() !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>

        function delUser(id){
            // 参数1 要请求的服务器路由
            // 参数2 请求要携带的参数数据  _method：delete  _token
            // 参数3 回调函数,回调函数的参数data表示服务器返回的数据
            // $.post(URL,data,callback);
            //询问框
            layer.confirm('确认删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                // layer.msg('删除成功', {icon: 1});
                $.post("{{url('admin/links/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                // console.log(data);
                    if(data.status == 0){
                        location.href = location.href;
                        layer.msg('删除失败', {icon: 5});
                    }else{
                        location.href = location.href;
                        layer.msg('删除成功', {icon: 6});
                    }

                });

            }, function(){

            });

        }
</script>
@endsection