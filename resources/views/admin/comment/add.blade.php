@extends('admin.public.parent')

@section('content')
	
<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="widget am-cf">
        <div class="widget-head am-cf">
            <div class="widget-title am-fl">添加评论</div>
            <div class="widget-function am-fr">
                <a href="javascript:;" class="am-icon-cog"></a>
            </div>
        </div>
        <div class="widget-body am-fr">

            <form class="am-form tpl-form-line-form" action="{{ url('admin/comment') }}" method="post">
                {{ csrf_field() }}
                <!-- <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">评论ID <span class="tpl-form-line-small-title">CommentId</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" id="user-name" name="cid">
                        <small>请填写标题文字10-20字左右。</small>
                    </div>
                </div> -->

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">用户ID <span class="tpl-form-line-small-title">UserId</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" id="user-name" name="uid">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">文章ID <span class="tpl-form-line-small-title">ArticleId</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" id="user-name" name="aid">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>

               <!--  <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">文章ID <span class="tpl-form-line-small-title">ArticleId</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" id="user-name" placeholder="">
                         <small>请填写标题文字10-20字左右。</small>
                    </div>
                </div> -->
                
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">评论内容 <span class="tpl-form-line-small-title">c_content</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" id="user-name" name="c_content">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>

               <!--  <div class="am-form-group">
                    <label for="user-intro" class="am-u-sm-3 am-form-label">评论内容 <span class="tpl-form-line-small-title">c_content</span></label>
                    <div class="am-u-sm-9">
                        <textarea class="" rows="10" id="user-intro" placeholder="1111111111111"></textarea>
                    </div>
                </div> -->
                <div class="am-form-group">
                    <label for="user-email" class="am-u-sm-3 am-form-label">评论时间 <span class="tpl-form-line-small-title">c_time</span></label>
                    <div class="am-u-sm-9">
                        <input type="datetime" class="am-form-field tpl-form-no-bg" value="" name="c_time"  data-am-datepicker="" readonly="">
                        <!-- <small>发布时间为必填</small> -->
                    </div>
                </div>

                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





@endsection

