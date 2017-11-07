<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/i/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/assets/i/app-icon72x72@2x.png') }}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="{{ asset('admin/assets/js/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('layer/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/amazeui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/amazeui.datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" />
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('layer/layer.js' )}}"></script>
    <script type="text/javascript" src="{{ asset('layer/jquery.js')}}"></script>
</head>

<body data-type="index">
    <script src="{{ asset('admin/assets/js/theme.js') }}"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="{{ asset('admin/assets/img/logo.png') }}" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                    </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span>admin</span> </a>
                        </li>
                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="{{ url('admin/logout') }}">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="assets/img/user02.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              admin
          </span>
                    <!-- <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a> -->
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/user') }}"  class="active">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 用户列表
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/article') }}" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 文章列表
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 栏目管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{ url('admin/subject/create') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加栏目
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="{{ url('admin/subject') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 栏目列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/comment') }}">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 评论管理

                    </a>
                </li>
               <!--  <li class="sidebar-nav-link">
                    <a href="chart.html">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 关注管理

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="chart.html">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 打赏管理

                    </a>
                </li> -->
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/advert')}}">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 广告管理

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 友情链接
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{ url('admin/links') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 链接列表
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="{{ url('admin/links/create') }}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 增加链接
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/config') }}">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 网站管理

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="{{ url('admin/recovery') }}">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 回收站管理

                    </a>
                </li>
               <!--  <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li> -->
                
                <!-- <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 数据列表
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="table-list.html">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文字列表
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="table-list-img.html">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 图文列表
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- 后台的注册 -->
               <!--  <li class="sidebar-nav-link">
                    <a href="sign-up.html">
                        <i class="am-icon-clone sidebar-nav-link-logo"></i> 注册
                        <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
                    </a>
                </li> -->
                <!-- <li class="sidebar-nav-link">
                    <a href="404.html">
                        <i class="am-icon-tv sidebar-nav-link-logo"></i> 404错误
                    </a>
                </li> -->

            </ul>
        </div>


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
            <!-- 中间部分是子页面 -->
                @yield('content')
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('admin/assets/js/amazeui.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/amazeui.datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>
</html>



