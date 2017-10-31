@extends('admin.public.parent')

@section('content')
<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="widget am-cf">
        <div class="widget-head am-cf">
            <div class="widget-title am-fl">添加页面</div>
            <div class="widget-function am-fr">
                <a href="javascript:;" class="am-icon-cog"></a>
            </div>
        </div>
        <div class="widget-body am-fr">
            <form action="{{ url('admin/article/') }}" method='post' class="am-form tpl-form-border-form" >
                {{ csrf_field() }}
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">标题 <span class="tpl-form-line-small-title">Title</span></label>
                    <div class="am-u-sm-12">
                        <input type="text" name="title" class="tpl-form-input am-margin-top-xs" id="user-name" placeholder="请输入标题文字">
                        <small>请填写标题文字10-20字左右。</small>
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-email" class="am-u-sm-12 am-form-label am-text-left">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                    <div class="am-u-sm-12">
                        <input type="text" name="add_time" class="am-form-field tpl-form-no-bg am-margin-top-xs" placeholder="发布时间" data-am-datepicker="" readonly="">
                        <small>发布时间为必填</small>
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-phone" class="am-u-sm-12 am-form-label am-text-left">作者 <span class="tpl-form-line-small-title">Author</span></label>
                    <div class="am-u-sm-12  am-margin-top-xs">
                        <select  name="user_id" data-am-selected="{searchBox: 1}">
                          <option value="1">-The.CC</option>
                          <option value="2">夕风色</option>
                          <option value="3">Orange</option>
                        </select>
                   </div>
                </div>
                 <div class="am-form-group">
                    <label for="user-phone" class="am-u-sm-12 am-form-label am-text-left">添加分类 <span class="tpl-form-line-small-title">add category</span></label>
                    <div class="am-u-sm-12  am-margin-top-xs">
                        <select name="pro_id" data-am-selected="{searchBox: 1}" style="display: none;">
                          <option value="1">栏目1</option>
                          <option value="2">栏目2</option>
                          <option value="3">栏目3</option>
                        </select>
                   </div>
                </div>
               <div class="am-form-group">
                    <label for="user-weibo" class="am-u-sm-12 am-form-label  am-text-left">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                    <div class="am-u-sm-12 am-margin-top-xs">
                        <div class="am-form-group am-form-file">
                            <div class="tpl-form-file-img">
                                <img src="assets/img/a5.png" alt="">
                            </div>
                            <button type="button" class="am-btn am-btn-danger am-btn-sm ">
                                   <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                            <input id="doc-form-file" type="file" multiple="">
                        </div>
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="user-intro" class="am-u-sm-12 am-form-label  am-text-left">文章内容</label>
                    <div class="am-u-sm-12 am-margin-top-xs ">
                        <!-- <textarea name="content" class="" rows="10" id="user-intro" placeholder="请输入文章内容"></textarea> -->

                        <script type="text/javascript" charset="utf-8" src="{{ asset('utf8-php\ueditor.config.js') }}"></script>
                        <script type="text/javascript" charset="utf-8" src="{{ asset('utf8-php\ueditor.all.min.js') }}"> </script>
                        <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                        <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                        <script type="text/javascript" charset="utf-8" src="{{ asset('utf8-php\lang/zh-cn/zh-cn.js') }}"></script>

                        <script id="editor" name="content" type="text/plain" style="..."></script>
                        <script>
                            var ue = UE.getEditor('editor');
                        </script>
                    </div>
                </div>
                
                

                <div class="am-form-group">
                    <div class="am-u-sm-12 am-u-sm-push-12">
                        <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection