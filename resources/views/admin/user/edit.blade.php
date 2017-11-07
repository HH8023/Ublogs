@extends('admin.public.parent')

@section('content')

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="widget am-cf">
        <div class="widget-head am-cf">
            <div class="widget-title am-fl">用户编辑</div>
            <div class="widget-function am-fr">
                <a href="javascript:;" class="am-icon-cog"></a>
            </div>
        </div>
        <div class="widget-body am-fr">
            <form class="am-form tpl-form-line-form" role="form" action="{{ url('admin/user/'.$user->id) }}" method="post">
                {{ csrf_field() }}

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">ID <span class="tpl-form-line-small-title">id</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" disabled id="user-name" name="id" value="{{ $user->id }}">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">用户ID <span class="tpl-form-line-small-title">Uid</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" disabled id="user-name" name="uid" value="{{ $user->uid }}">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">昵称 <span class="tpl-form-line-small-title">nickname</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" disabled id="user-name" value="{{ $user->nickname }}" name="nickname">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">电话 <span class="tpl-form-line-small-title">Tel</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" disabled id="user-name" value="{{ $user->tel }}" name="password">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="user-phone" class="am-u-sm-3 am-form-label">性别 <span class="tpl-form-line-small-title">Sex</span></label>
                    <div class="am-u-sm-9">
                        <select data-am-selected="{searchBox: 1}" name="sex" disabled style="display: none;">
                            <option value="">--请选择--</option>
                            <option value="1" @if($user->sex == 1) selected @endif>男</option>
                            <option value="2" @if($user->sex == 2) selected @endif>女</option>
                        </select>

                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-email" class="am-u-sm-3 am-form-label">生日 <span class="tpl-form-line-small-title">Birthday</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="am-form-field tpl-form-no-bg" value="{{ $user->birthday }}" name="birthday" disabled data-am-datepicker="" readonly="">
                        <!-- <small>发布时间为必填</small> -->
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-weibo" class="am-u-sm-3 am-form-label">头像 <span class="tpl-form-line-small-title">Images</span></label>
                    <div class="am-u-sm-9">
                        <div class="am-form-group am-form-file">
                            <div class="tpl-form-file-img">
                                <img src="{{ asset('admin/assets/img/upload/'.$user->u_photo) }}" style="width: 60px;" disabled name="photo" >
                            </div>
                            <!-- <button type="button" class="am-btn am-btn-danger am-btn-sm">
                             <i class="am-icon-cloud-upload"></i> 添加头像</button>
                            <input id="doc-form-file" type="file" multiple=""> -->
                        </div>

                    </div>
                </div>

                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <!-- <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success "> -->
                        <a href="{{ url('admin/user') }}" class="am-btn am-btn-primary tpl-btn-bg-color-success ">返回</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

