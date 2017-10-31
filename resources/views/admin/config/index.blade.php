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
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">名称 <span class="tpl-form-line-small-title">Name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">内容<span class="tpl-form-line-small-title">content</span></label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="3" id="user-intro" placeholder="请输入内容"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">描述 <span class="tpl-form-line-small-title">Tip</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">排序 <span class="tpl-form-line-small-title">number</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;">
                                              <option value="a">0</option>
                                              <option value="b">1</option>
                                              <option value="o">2</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">SEO关键字 <span class="tpl-form-line-small-title">SEO</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入SEO关键字">
                                        </div>
                                    </div> -->

                                    

                                   

                                    
                                    <div class="am-form-group">
                                        <label for="config_address" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title">address</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                                            <small>请填写地址</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">内容<span class="tpl-form-line-small-title">copyright</span></label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="3" id="user-intro" placeholder="备案"></textarea>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="status" class="am-u-sm-3 am-form-label">网站开关 <span class="tpl-form-line-small-title">status</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="tpl-switch">
                                                <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" checked="">
                                                <div class="tpl-switch-btn-view">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>

                                </form>
                                

                                 <br><br>
                            </div>
                        </div>
                    </div>
                </div>
@endsection