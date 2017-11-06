@extends('admin.public.parent')

@section('content')

<div class="row">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">修改链接</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body am-fr">
                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{url('admin/links/'.$links->lid)}}" method="post">
                    {{csrf_field()}}

                    {{ method_field('PUT') }}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">链接名称 <span class="tpl-form-line-small-title">name</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="link_name" value="{{$links->link_name}}" required>
                            <small>请填写名称</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">title</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="link_title" value="{{$links->link_title}}" required>
                            <small>请填写标题</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title">url</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="link_url" value="{{$links->link_url}}" required>
                            <small>请填写地址</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <input type="submit" value="提交" class="am-btn am-btn-primary tpl-btn-bg-color-success">
                        </div>
                    </div>
                </form><br><br>
            </div>
        </div>
    </div>
</div>
@endsection