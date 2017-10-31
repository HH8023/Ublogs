@extends('admin.public.parent')

@section('content')           

            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">栏目列表</div>


                            </div>
                            @if (session('msg'))
                                <script>
                                    alert("{{ session('msg') }}");
                                </script>
                            @endif
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="{{ url('admin/subject/create') }}" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                      
                                    </div>
                                </div>
                                <form name='myform' action="" method='post' style='display:none'>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <form action="{{ url('admin/subject') }}" method="get">
                                        
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" class="am-form-field " name="name">
                                            <span class="am-input-group-btn">
                                                <input class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit" value="搜索">
                                            </span>
                                        </div>
                                    </form>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>栏目缩略图</th>
                                                <th>栏目标题</th>
                                                <th>时间</th>
                                                <th>栏目简介</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($list as $v)
                                            <tr class="gradeX">
                                                <td class="am-text-middle">{{ $v->id }}</td>
                                                <td>
                                                    <img src="{{ asset('admin/assets/img/k.jpg') }}" class="tpl-table-line-img" alt="">
                                                </td>

                                                <td class="am-text-middle">{{ $v->name }}</td>
                                                <td class="am-text-middle">{{ $v->add_time }}</td>
                                                <td class="am-text-middle">{{ $v->notice }}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ url('admin/subject/'.$v->id.'/edit') }}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:doDelsubject({{ $v->id }})" class="tpl-table-black-operation-del">
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
                                            {!! $list->appends($where)->render() !!}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection