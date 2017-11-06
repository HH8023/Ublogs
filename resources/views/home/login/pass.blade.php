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
  <meta name="mobile-agent" content="format=html5;url=http://www.jianshu.com/sign_up">
  <!-- End of Baidu Transcode -->
  <meta name="description"  content="加入简书，开启你的创作之路，来这里接收世界的赞赏。">
  <meta name="360-site-verification" content="604a14b53c6b871206001285921e81d8" />
  <meta property="wb:webmaster" content="294ec9de89e7fadb" />
  <meta property="qc:admins" content="104102651453316562112116375" />
  <meta property="qc:admins" content="11635613706305617" />
  <meta property="qc:admins" content="1163561616621163056375" />
  <meta name="google-site-verification" content="cV4-qkUJZR6gmFeajx_UyPe47GW9vY6cnCrYtCHYNh4" />
  <meta name="google-site-verification" content="HF7lfF8YEGs1qtCE-kPml8Z469e2RHhGajy6JPVy5XI" />
  <meta http-equiv="mobile-agent" content="format=html5; url=http://www.jianshu.com/sign_up">
  <!-- Apple -->
  <meta name="apple-mobile-web-app-title" content="简书">
  <title>注册</title>
  <meta name="csrf-param" content="authenticity_token" />
  <meta name="csrf-token" content="I2SI2ht+vSKlOoNRuMaM9+dUVZWdBKoMCjrogIvKHf2uHq7kBO9yg9imc5i2hoedsoEz9MBTP0hf+hhjZQlfkQ==" />
  <link rel="stylesheet" media="all" href="{{ asset('home/css/web-b6ffb2ef57d077ea3cf8_1.css') }}" />
  <link rel="stylesheet" media="all" href="{{ asset('home/css/entry-27463f2882f8ebd9e811_1.css') }}" />
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
    <div class="logo">
      <h2>blog<h2>
    </div>
    <div class="main">
      <h4 class="title">
        <div class="normal-title">
          <a id="js-sign-up-btn" class="active" href="{{url('home/register')}}">重置密码</a>
        </div>
      </h4>
      @if (session('msg'))
        <script>
            alert("{{ session('msg') }}");
        </script>
      @endif
      <div class="js-sign-up-container">
        <form class="new_user" id="new_user" action="{{url('home/resetpass')}}" a0ccept-charset="UTF-8" method="post">
            {{ csrf_field() }}
            <div class="input-prepend restyle no-radius js-normal">
                <input placeholder="手机号" type="tel" name="tel" id="phone" />
              <i class="iconfont ic-phonenumber"></i>
            </div>

          <div class="input-prepend restyle">
              <input type="text" name="sms_code" id="sms_code" placeholder="手机验证码"/>
              <button type="button" onclick="code()" class="sign-up-button1"/>点击获取手机验证码</button>
              <i class="iconfont ic-verify"></i>
          </div>

            {{--<button type="button" onclick="code()" class="sign-up-button"/>手机验证码</button>--}}

          <div class="input-prepend">
              <input placeholder="请输入新密码" type="password" name="password" id="password" />
              <i class="iconfont ic-password"></i>
          </div>
          <input type="submit" value="重置" class="sign-up-button" data-disable-with="重置" />
        </form>
    <!-- 更多注册方式 -->
      </div>
    </div>
  </div>
<style>
  .sign-up-button1{
    width: 100%;
    padding: 9px 18px;
    font-size: 18px;
    border: none;
    cursor: pointer;
    outline: none;
    display: block;
    clear: both;
  }
</style>
  <!-- Javascripts
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="application/json" data-name="page-data">{"user_signed_in":false,"locale":"zh-CN","os":"other","read_mode":"day","read_font":"font2"}</script>
  <script src="{{ asset('home/js/web-base-9e640fd8a4bb1abb5d6a.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('home/js/web-06eafca9d97868f774e0.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('home/js/entry-fb4e37cf509d7b10df9c.js') }}" crossorigin="anonymous"></script>
  <script type="text/javascript">
  function code(){
      var phone = $('#phone').val();
  //    alert('phone');
          if(!(/^1[34578]\d{9}$/.test(phone))){
              alert('手机号格式不正确');
              return false;
          } else {
              $.ajax({
                  type: "get",
                  async: false,
                  url: '{{ url('home/code') }}',
                  data: {phone: phone},
                  success: function (data) {
                      if (data == 'ok') {
                          alert('请在5分钟内完成重置密码');
                      }
                  }
              })
          }
  }
  </script>

</body>
</html>
