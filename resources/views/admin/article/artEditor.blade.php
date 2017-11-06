@extends('admin.public.parent')

@section('content')
<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="widget am-cf">
        <div class="widget-head am-cf">
            <div class="widget-title am-fl">文章详情</div>
            <div class="widget-function am-fr">
                <a href="javascript:;" class="am-icon-cog"></a>
            </div>
        </div>
        <div class="widget-body am-fr">
            <form class="am-form tpl-form-border-form">
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">标题 <span class="tpl-form-line-small-title">Title</span></label>
                    <div class="am-u-sm-12">
                        <input type="text" class="tpl-form-input am-margin-top-xs" id="user-name" placeholder="{{ $title->title }}">
                        <small>请填写标题文字10-20字左右。</small>
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="user-email" class="am-u-sm-12 am-form-label am-text-left">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                    <div class="am-u-sm-12">
                        <input type="text" class="am-form-field tpl-form-no-bg am-margin-top-xs" placeholder="{{ $title->add_time }}" disabled="">
                        <small>发布时间为必填</small>
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="user-phone" class="am-u-sm-12 am-form-label am-text-left">作者 <span class="tpl-form-line-small-title">Author</span></label>
                    <div class="am-u-sm-12  am-margin-top-xs">
                       <input type="text" class="am-margin-top-xs" placeholder="{{ $title->user_id }}"> 
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="user-intro" class="am-u-sm-12 am-form-label  am-text-left">文章内容</label>
                    <div class="am-u-sm-12 am-margin-top-xs">
                        <textarea class="" rows="10" id="user-intro" placeholder="{{ $aid-> content }}"></textarea>
                    </div>
                </div>
                <div class="am-form-group">
                    <div class="am-u-sm-12 am-u-sm-push-12">

                        <a href="{{ url('admin/article/') }}"><input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="返回"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

