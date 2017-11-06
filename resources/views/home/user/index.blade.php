@extends('home.public.parent')

@section('content')

<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">

            <div class="user-info">
                <!--标题 -->
                <div class="am-cf am-padding">
                    <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong></div>
                </div>
                <hr/>

                <!--头像 -->
                <div class="user-infoPic">

                    <div class="filePic">
                        <input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
                        <img class="am-circle am-img-thumbnail" src="{{ asset('home/images/getAvatar.do.jpg') }}" alt="" />
                    </div>

                    <p class="am-form-help">头像</p>

                    <div class="info-m">
                        <div><b>用户名：<i>小叮当</i></b></div>
                        <!-- <div class="u-level">
                            <span class="rank r2">
                                 <s class="vip1"></s><a class="classes" href="#">更改图片   </a>
                            </span>
                        </div> -->
                        <div class="u-safety">
                            <a href="safety.html">
                             更改图片：
                            <span class="u-profile"><i class="bc_ee0000" style="width: 60px;" width="0">带回来的</i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--个人信息 -->
                <div class="info-main">
                    <form class="am-form am-form-horizontal">

                        <div class="am-form-group">
                            <label for="user-name2" class="am-form-label">昵称</label>
                            <div class="am-form-content">
                                <input type="text" id="user-name2" placeholder="nickname">

                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-form-label">姓名</label>
                            <div class="am-form-content">
                                <input type="text" id="user-name2" placeholder="name">

                            </div>
                        </div>

                        <div class="am-form-group">
                            <label class="am-form-label">性别</label>
                            <div class="am-form-content sex">
                                <label class="am-radio-inline">
                                    <input type="radio" name="radio10"/> 男
                                </label>
                                <label class="am-radio-inline">
                                    <input type="radio" name="radio10" /> 女
                                </label>
                                
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-form-label">电话</label>
                            <div class="am-form-content">
                                <input id="user-phone" placeholder="telephonenumber" type="tel">

                            </div>
                        </div>
                    
                        <div class="am-form-group safety">
                            <label for="user-safety" class="am-form-label">账号安全</label>
                            <div class="am-form-content safety">
                                <a href="safety.html">

                                    <span class="am-icon-angle-right"></span>

                                </a>

                            </div>
                        </div>
                        <div class="info-btn">
                            <div class="am-btn am-btn-danger">保存修改</div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

    <aside class="menu">
        <ul>
            
            <li class="person">
                <span>个人设置</span>
            </li>
            <li class="person">
                <ul>
                    <li><a href="{{ url('home/user') }}">个人中心</a></li>
                    <li><a href="{{ url('home/user/password') }}">修改密码</a></li>
                </ul>
            </li>
            <li class="person">
                <ul>
                    <li><a href="{{ url('home/user/article') }}">我的文章</a></li>
                    <li><a href="{{ url('home/user/comment') }}">我的评论</a></li>
                </ul>
            </li>
            <li class="person">
                <ul>
                    <!-- <li> <a href="news.html">我的关注</a></li> -->
                </ul>
            </li>
        </ul>
    </aside>
</div>

@endsection