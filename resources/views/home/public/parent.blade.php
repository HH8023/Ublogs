<!DOCTYPE html>
<!--[if IE 6]><html class="ie lt-ie8"><![endif]-->
<!--[if IE 7]><html class="ie lt-ie8"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <!-- Start of Baidu Transcode -->
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta name="applicable-device" content="pc,mobile">
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="true"/>
    <!-- End of Baidu Transcode -->

    <meta name="description"  content="">
    <meta name=""  content="">

    <meta name="360-site-verification" content="604a14b53c6b871206001285921e81d8" />
    <meta property="wb:webmaster" content="294ec9de89e7fadb" />
    <meta property="qc:admins" content="104102651453316562112116375" />
    <meta property="qc:admins" content="11635613706305617" />
    <meta property="qc:admins" content="1163561616621163056375" />
    <meta name="google-site-verification" content="cV4-qkUJZR6gmFeajx_UyPe47GW9vY6cnCrYtCHYNh4" />
    <meta name="google-site-verification" content="HF7lfF8YEGs1qtCE-kPml8Z469e2RHhGajy6JPVy5XI" />
    <meta http-equiv="mobile-agent" content="format=html5; url=http://localhost/">

    <!-- Apple -->
    <meta name="apple-mobile-web-app-title" content="">
    @foreach($configs as $v)
    <title>{{ $v->conf_title }}</title>
    @endforeach
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="AMg+PRAXcTf7a3btdssPEB45SNQxmLLbNsOqeNpEV7u+2waHgabTf8PynatBb+jJVqqoWzWfU558leBQ3lqWJw==" />

    <link rel="stylesheet" media="all" href="{{ asset('home/css/web-b6ffb2ef57d077ea3cf8_6.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('home/css/entry-568c39093a4cda20e253_1.css') }}" />
</head>

<body lang="zh-CN" class="reader-black-font">
    <!-- 全局顶部导航栏 -->
    @if(empty(session('tel'))) 
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="width-limit">
            <a class="logo" href=""><!-- <img src="{{ asset('home/picture/') }}"> -->Ublog</a>
            <!-- 右上角 -->
            <!-- 未登录显示登录/注册/写文章 -->
            <a class="btn write-btn" target="_blank" href="{{ url('/home/login') }}"><i class="iconfont ic-write"></i>写文章</a>
            <a class="btn sign-up" href="{{ url('/home/register') }}">注册</a>
            <a class="btn log-in" href="{{ url('/home/login') }}">登录</a>
            <!-- 如果用户登录，显示下拉菜单 -->
            <div id="view-mode-ctrl"></div>
            <div class="">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            <div class="container">
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/home/index') }}"><span class="menu-text">首页</span><i class="iconfont ic-navigation-discover menu-icon"></i></a></li>
                        <!-- <li class=""><a class="app-download-btn" href="/apps"><span class="menu-text">下载App</span><i class="iconfont ic-navigation-download menu-icon"></i></a></li> -->
                        <li class="search" padding-left=130px;>
                              <form target="_blank" action="{{ url('/home/search') }}" name="" accept-charset="UTF-8" method="get">
                                <input name="utf8" type="hidden" value="" />
                                <input type="text" name="keywords" id="q" value="" placeholder="搜索" class="search-input" />
                                <a class="search-btn" ><i class=""></i></a>
                            </form> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="width-limit">
            <!-- 左上方 Logo -->
            <a class="logo" href=""><!-- <img src="{{ asset('home/picture/') }}"> -->Ublog</a>

            <!-- 右上角 -->
            <!-- 登录显示写文章 -->
            <a class="btn write-btn" target="_blank" href="{{ url('/home/article/add') }}"><i class="iconfont ic-write"></i>写文章</a>
            <!-- 如果用户登录，显示下拉菜单 -->
            <div class="user">
                <div data-hover="dropdown">
                    <a class="avatar" href="{{ url('/home/user/') }}"><img src="{{ asset('home/picture/b52e96e4-2f5c-472f-906e-7a8b2b94d7ae.png') }}" alt="120"></a>
                </div>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('home/user') }}">
                            <i class="iconfont ic-navigation-profile"></i><span>我的主页</span>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" data-method="delete" href="{{ url('home/loginout') }}">
                            <i class="iconfont ic-navigation-signout"></i><span>退出</span>
                        </a>          
                    </li>
                </ul>
            </div>
            <div class="style-mode"><a class="style-mode-btn"><i class="iconfont ic-navigation-mode"></i></a>
                <div class="popover-modal" style="left: 0px; display: none;">
                    <div class="meta"><i class="iconfont ic-navigation-night"></i><span>夜间模式</span></div> 
                    <div class="switch day-night-group"><a class="switch-btn">开</a> <a class="switch-btn active">关</a></div><hr> 
                    <div class="switch font-family-group"><a class="switch-btn font-song">宋体</a><a class="switch-btn font-hei active">黑体</a></div> 
                </div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <!-- <a href="http://www.jianshu.com/">
                                <span class="menu-text">发现</span><i class="iconfont ic-navigation-discover menu-icon"></i>
                            </a> -->            
                        </li>
                        <li class="active">
                            <a href="{{ url('/home/index') }}"><span class="menu-text">首页</span><i class="iconfont ic-navigation-discover menu-icon"></i></a>
                        </li>
                        <li class="search">
                            <form target="_blank" action="{{ url('/home/search') }}" name="" accept-charset="UTF-8" method="get">
                                <input name="utf8" value="✓" type="hidden">
                                <input name="keywords" id="q" placeholder="搜索" class="search-input" type="text">
                                <a class="search-btn" ><i class="iconfont ic-search"></i></a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @endif

<div class="container index">
    <div class="row">
        @yield('content')
    </div>
</div>
    <footer class="container">
        <div class="row">
            <div class="col-xs-17 main">               
                @foreach($links as $v)
                <a target="_blank" href="{{ $v->link_url }}">{{ $v->link_name }}</a><em> · </em>
                @endforeach
                <div class="icp">
                    @foreach($configs as $v)
                        {{ $v->conf_copyright }}
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
</body>



<script type="application/json" data-name="page-data">{"user_signed_in":false,"locale":"zh-CN","os":"other","read_mode":"day","read_font":"font2"}</script>
<script src="{{ asset('home/js/babel-polyfill-676833c6a4d68573b4c3_1.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('home/js/web-base-9e640fd8a4bb1abb5d6a_5.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('home/js/web-06eafca9d97868f774e0_5.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('home/js/entry-bc590a7721c32bb9089a_1.js') }}" crossorigin="anonymous"></script>
</html>