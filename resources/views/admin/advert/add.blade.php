@extends('admin.public.parent')

@section('content')


    

         <!-- 内容区域 -->
        
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 表单 <small>Amaze UI</small></div>
                        <p class="page-header-description">Amaze UI 有许多不同的表格可用。</p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                    </div>
                </div>
                    

            <div class="row-content am-cf">
                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">线条表单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                         
                            <div class="widget-body am-fr">

                                <form action="{{ url('admin/advert')}}" class="am-form tpl-form-line-form"  enctype="multipart/form-data" method='post'>
                                        {{ csrf_field() }}
                                        <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">作者 <span class="tpl-form-line-small-title">Author</span></label>
                                        <div class="am-u-sm-9">
                                          
                                           <input type="text" class="form-control m-b-10" name='cid'>
                                        </div>
                                    </div>



                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" name="ad_title">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">广告图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                             <div class="result_wrap">
                                                <ul class="list_btn">
                                                    <li><input name="ad_image" type="file" style="width:280px"> <span onclick="pic_minus(this)"><i class="fa fa-minus-circle"></i></span></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">网址 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" name="ad_address">
                                         
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">状态 <span class="tpl-form-line-small-title">Title</span></label>
                                         <div class="am-u-sm-9">
                                            <input type="radio" name="ad_state" value='1'>开启
                                            <input type="radio" name="ad_state" value='0'>关闭
                                            <!-- <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" name="state"> -->
                                         
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly="" name="start_time">
                                            <small>发布时间为必填</small>
                                        </div>
                                    </div>


                                       <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">结束时间 <span class="tpl-form-line-small-title">Time</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="结束时间" data-am-datepicker="" readonly="" name="end_time">
                                            <small>结束时间为必填</small>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">

                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success "></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                

@endsection