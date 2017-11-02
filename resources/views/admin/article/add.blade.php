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
            @if(session('msg'))
                {{session('msg')}}
            @endif
       
        <div class="widget-body am-fr">
            <form id="art_form" action="{{ url('admin/article') }}" method='post' class="am-form tpl-form-border-form"  enctype="multipart/form-data">
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
                        <input type="text" name="add_time" class="am-form-field tpl-form-no-bg am-margin-top-xs" value="{{date('Y-m-d H:i:s')}}" >
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

                        <select id="selectId" name="name" data-am-selected="{searchBox: 1}" style="display: none;">
                          <option value="1">栏目1</option>
                          <option value="2">栏目2</option>
                          <option value="3">栏目3</option>
                        </select>
                   </div>
                </div>
               <div class="am-form-group">
                    <span for="user-weibo" class="am-u-sm-12 am-form-label  am-text-left">缩略图<span class="tpl-form-line-small-title">Images</span></span>
                    <div class="am-u-sm-12 am-margin-top-xs">
                        <div class="am-form-group am-form-file">
                            <div class="tpl-form-file-img">
                                <input type="text"  name="photo" id="photo" style="width:25%">
                                <img id="img1" alt="上传后显示图片" style="max-width:3450px;max-height:200px;">
                            </div>
                                <input  id="file_upload" name="file_upload" type="file" multiple="true" >
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                <i class="am-icon-cloud-upload"></i>添加封面图片</button>
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
<script>
    $(function () {
        $("#file_upload").change(function () {
            uploadImage();
        })
    })
    function uploadImage() {
    //  判断是否有选择上传文件
        var imgPath = $("#file_upload").val();
        if (imgPath == "") {
            alert("请选择上传图片！");
            return;
        }
        //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png' && strExtension != 'bmp') {
            layer.alert("请选择图片文件");
            return;
        }
        //创建FormData对象
        var formData = new FormData($('#art_form')[0]);
        $.ajax({
            url:'/admin/upload', /*去过那个php文件*/
            type:'POST',  /*提交方式*/
            data:formData,
            cache: false,
            contentType: false,        /*不可缺*/
            processData: false,         /*不可缺*/
            success:function(data){      
                $('#img1').attr('src','/'+data);
                $('#photo').val(data);
            },
            error:function(XMLHttpRequest, textStatus, errorThrown){
                layer.alert("上传失败，请检查网络后重试");
            }
        });

    }
    
</script>
@endsection