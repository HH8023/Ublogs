@extends('admin.public.parent')

@section('content')



<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">广告列表</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
                    @if (session('msg'))
                        <script>
                            alert("{{ session('msg') }}");
                        </script>
                    @endif
                  <form name='myform' action="" method='post' style='display:none'>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                </form>
            <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="{{ url('admin/advert')}}" name="">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索作者..." name='cid'>
                    </form>

                </div>
               
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
               
                    <thead>
                        <tr>
                            <th>ad_id</th>
                            <th>用户</th>
                            <th>标题</th>
                            <th>广告图</th>
                            <th>地址</th>
                            <th>状态</th>
                            <th>广告开始时间</th>
                            <th>广告结束时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                            <a href="{{ url('admin/advert/create')}}">
                                <i class="am-icon-pencil"></i> 添加
                            </a>
                    <tbody>
                 
                       @foreach ($adve as $v) 
                       <tr class="gradeX">
                            <td>{{ $v->ad_id }}</td>
                            <td>{{ $v->cid}}</td>
                            <td>{{ $v->ad_title }}</td>
                            <td><img src='{{ asset("image/"."$v->ad_image") }}' style="width:100px;"></td>
                            <td>{{ $v->ad_address }}</td>
                            <td>{{ $v->ad_state }}</td>
                            <td>{{ $v->start_time }}</td>
                             <td>{{ $v->end_time }}</td>
                        
                             <td class="am-text-middle">
                                <div class="tpl-table-black-operation">
                                 
                                    <a href="{{ url('admin/advert/'.$v->ad_id.'/edit')}}">
                                        <i class="am-icon-pencil"></i> 修改
                                    </a>
                                    <a href="javascript:doDel({{ $v->ad_id }})" class="tpl-table-black-operation-del">
                                        <i class="am-icon-trash"></i> 删除
                                    </a>
                                </div>
                            </td>
                       </tr> 
                     @endforeach 
                        <!-- more data -->

                     
                    </tbody>
                </table>
                
                  <!-- 分页 -->             
     
           
            {!! $adve->fragment('where')->render() !!}
            </div>
        </div>
    </div>
    <script>
        function doDel(id)
        {
            // alert(id);
            if(confirm('你确定要删除吗？')){
                var form = document.myform;
                form.action = 'advert/'+id;
                form.submit();
            }
        }
    </script>


@endsection