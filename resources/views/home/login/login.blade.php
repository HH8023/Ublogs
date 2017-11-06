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
  <meta name="mobile-agent" content="format=html5;url=http://www.jianshu.com/sign_in">
  <!-- End of Baidu Transcode -->
  <meta name="description"  content="加入简书，开启你的创作之路，来这里接收世界的赞赏。">
  <meta name="360-site-verification" content="604a14b53c6b871206001285921e81d8" />
  <meta property="wb:webmaster" content="294ec9de89e7fadb" />
  <meta property="qc:admins" content="104102651453316562112116375" />
  <meta property="qc:admins" content="11635613706305617" />
  <meta property="qc:admins" content="1163561616621163056375" />
  <meta name="google-site-verification" content="cV4-qkUJZR6gmFeajx_UyPe47GW9vY6cnCrYtCHYNh4" />
  <meta name="google-site-verification" content="HF7lfF8YEGs1qtCE-kPml8Z469e2RHhGajy6JPVy5XI" />
  <meta http-equiv="mobile-agent" content="format=html5; url=http://www.jianshu.com/sign_in">
  <!-- Apple -->
  <meta name="apple-mobile-web-app-title" content="简书">
  <title>登录</title>
  <meta name="csrf-param" content="authenticity_token" />
  <meta name="csrf-token" content="gnFUY+arPm9uCpZelYD6AAYqC7k4rrS8aKsSMN/v7AT2eYKVcYLmi27xKcxj/QJXlHDBmpvZ+kyMH5e14QFa5A==" />
  <link rel="stylesheet" media="all" href="{{ asset('home/css/web-b6ffb2ef57d077ea3cf8_1.css') }}" />
  <link rel="stylesheet" media="all" href="{{ asset('home/css/entry-27463f2882f8ebd9e811_2.css') }}" />
  <link href="//cdn2.jianshu.io/assets/favicons/favicon-03411b154a430b85d807b4366489c21122fb983a38f3d7ca926f882e6367b13e.ico" rel="icon">
  <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/57-a6f1f1ee62ace44f6dc2f6a08575abd3c3b163288881c78dd8d75247682a4b27.png" sizes="57x57" />
  <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/72-fb9834bcfce738fd7b9c5e31363e79443e09a81a8e931170b58bc815387c1562.png" sizes="72x72" />
  <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/76-49d88e539ff2489475d603994988d871219141ecaa0b1a7a9a1914f4fe3182d6.png" sizes="76x76" />
  <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/114-24252fe693524ed3a9d0905e49bff3cbd0228f25a320aa09053c2ebb4955de97.png" sizes="114x114" />
  <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/120-1bb7371f5e87f93ce780a5f1a05ff1b176828ee0d1d130e768575918a2e05834.png" sizes="120x120" />
  <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/152-bf209460fc1c17bfd3e2b84c8e758bc11ca3e570fd411c3bbd84149b97453b99.png" sizes="152x152" />
</head>

<body class="no-padding reader-black-font" lang="zh-CN">
  <div class="sign">
    <div class="logo"><h2>blog<h2></div>
      <div class="main">
          <h4 class="title">
              <div class="normal-title">
                  <a class="active" href="{{url('home/login')}}">登录</a>
                  <b>·</b>
                  <a id="js-sign-up-btn" class="" href="{{url('home/register')}}">注册</a>
              </div>
          </h4>
          @if (session('msg'))
              <script>
                  alert("{{ session('msg') }}");
              </script>
          @endif
          <div class="js-sign-in-container">
              <form id="new_session" action="{{url('home/dologin')}}" accept-charset="UTF-8" method="post">
                    {{ csrf_field() }}

                    <!-- 正常登录登录名输入框 -->
                    <div class="input-prepend restyle js-normal">
                      <input placeholder="手机号" type="text" name="tel" id="phone" />
                      <i class="iconfont ic-user"></i>
                    </div>

                  <div class="input-prepend">
                    <input placeholder="密码" type="password" name="password" id="pass" />
                    <i class="iconfont ic-password"></i>
                  </div>

                  <div class="remember-btn">
                    <input type="checkbox" value="true" checked="checked" name="session('remember_me')['password']" id="session_remember_me" /><span>记住我</span>
                  </div>
                  <div class="forget-btn">
                    <a class="" data-toggle="dropdown" href="">登录遇到问题?</a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('home/dopass')}}">用手机号重置密码</a></li>
                    </ul>
                  </div>
                  <input type="submit" value="登录" class="sign-in-button" data-disable-with="登录" />
              </form>
          </div>
      </div>
    </div>

<!-- Placed at the end of the document so the pages load faster -->
<script type="application/json" data-name="page-data">{"user_signed_in":false,"locale":"zh-CN","os":"other","read_mode":"day","read_font":"font2"}</script>
<script src="{{ asset('home/js/web-base-82cbc499095c348901c2.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('home/js/web-62326da13bbb4d106765.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('home/js/entry-56725a9df7b7eb9377b3.js') }}" crossorigin="anonymous"></script>
</body>
</html>
