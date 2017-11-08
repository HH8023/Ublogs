@extends('admin.public.parent')

@section('content')

<div class="row">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">网站配置</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>

            @if (session('msg'))
                <script>
                    alert("{{ session('msg') }}")
                </script>
            @endif

            <div class="widget-body am-fr">
                 @foreach($configs as $v)
                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('admin/config/'.$v->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="conf_title" class="tpl-form-input" placeholder="{{ $v->conf_title }}" required>
                            <small>请填写标题</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">名称 <span class="tpl-form-line-small-title">Name</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="conf_name" class="tpl-form-input" placeholder="{{ $v->conf_name }}" required>
                            <small>请填写名称</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">公告<span class="tpl-form-line-small-title">content</span></label>
                        <div class="am-u-sm-9">
                            <textarea name="conf_content" rows="3" placeholder="{{ $v->conf_content }}" required></textarea>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">描述 <span class="tpl-form-line-small-title">Tip</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="conf_tip" class="tpl-form-input" id="user-name" placeholder="{{ $v->conf_tip }}" required>
                            <small>请描述一下你的网站</small>
                        </div>
                    </div>
                    <!-- <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">排序 <span class="tpl-form-line-small-title">number</span></label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" style="display: none;">
                                <option value="a">0</option>
                                <option value="b">1</option>
                                <option value="o">2</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="am-form-group">
                        <label for="config_address" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title">address</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="conf_address" class="tpl-form-input" placeholder="{{ $v->conf_address }}" required>
                            <small>请填写地址</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">关于我们<span class="tpl-form-line-small-title">copyright</span></label>
                        <div class="am-u-sm-9">
                            <textarea name="conf_copyright" rows="3" placeholder="{{ $v->conf_copyright }}" required></textarea>
                        </div>
                    </div><br>
                    
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <input type="submit" value="提交" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                        </div>
                    </div>
                </form><br><br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection