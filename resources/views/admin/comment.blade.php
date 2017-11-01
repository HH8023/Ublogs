@extends('admin.public.parent')

@section('content')


<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">评论列表</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>

            <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="{{ url('admin/comment')}}">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索作者..." name='name'>
                    </form>

                </div>
               
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
               
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>作者</th>
                            <th>文章</th>
                            <th>内容</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                       @foreach ($comment as $v) 
                       <tr class="gradeX">
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->user_id }}</td>
	                        <td>{{ $v->artical_id }}</td>
	                        <td>{{ $v->com_content }}</td>
	                        <td>{{ $v->com_time }}</td>
                            
                             
                       </tr> 
                     @endforeach 
                        <!-- more data -->
                    </tbody>
                </table>
                <!-- 分页 -->
               <div class="am-u-lg-12 am-cf">

                    <div class="am-fr">
                        <ul class="am-pagination tpl-pagination">
                            <li class="am-disabled"><a href="{{ url('admin/comment')}}">«</a></li>
                            <li class="am-active"><a href="{{ url('admin/comment')}}">1</a></li>
                            <li><a href="{{ url('admin/comment')}}">2</a></li>
                            <li><a href="#">3</a></li>
                          
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection