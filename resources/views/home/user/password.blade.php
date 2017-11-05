@extends('home.public.parent')

@section('content')

<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">

            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">修改密码</strong></div>
            </div>
            <hr/>
            <!--进度条-->
            <div class="m-progress">
                <div class="m-progress-list">
                    
                    <span class="u-progress-placeholder"></span>
                </div>
                <div class="u-progress-bar total-steps-2">
                    <div class="u-progress-bar-inner"></div>
                </div>
            </div>
            <form class="am-form am-form-horizontal">
                <div class="am-form-group">
                    <label for="user-old-password" class="am-form-label">原密码</label>
                    <div class="am-form-content">
                        <input type="password" id="user-old-password" placeholder="请输入原登录密码">
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="user-new-password" class="am-form-label">新密码</label>
                    <div class="am-form-content">
                        <input type="password" id="user-new-password" placeholder="由数字、字母组合">
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="user-confirm-password" class="am-form-label">确认密码</label>
                    <div class="am-form-content">
                        <input type="password" id="user-confirm-password" placeholder="请再次输入上面的密码">
                    </div>
                </div>
                <div class="info-btn">
                    <div class="am-btn am-btn-danger">保存修改</div>
                </div>

            </form>

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
                    <li> <a href="{{ url('home/user/password') }}">修改密码</a></li>
                </ul>
            </li>
            <li class="person">
                <ul>
                    <li> <a href="{{ url('home/user/article') }}">我的文章</a></li>
                    <li> <a href="reply.html">我的回复</a></li>
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