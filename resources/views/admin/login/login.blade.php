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
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/amazeui.datatables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>

</head>

<body data-type="login">
    <script src="{{asset('admin/assets/js/theme.js')}}"></script>
    <div class="am-g tpl-g">
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
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">
                </div>
                <form class="am-form tpl-form-line-form" method="post" action="{{ url('admin/doLogin') }}">
                    {{ csrf_field() }}
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="aname" name="aname" placeholder="请输入账号">
                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="apwd" name="apwd" placeholder="请输入密码">
                    </div>

                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remember-me">
                            记住密码
                        </label>
                    </div>

                    <div class="am-form-group">
                        <input type="submit" id="login" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('admin/assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
   <!--  <script>
        $('#login').click(function(){
            var aname = $('#aname').val();
            var apwd = $('#apwd').val();
            // alert(aname);
            // $('form').submit();
            $.ajax({
                url:"{{ url('admin/doLogin') }}",
                type:'get',
                async:false,
                data:{aname:aname, apwd:apwd},
                // data: {aname: aname},
                // dataType: 'json',
                error:function()
                {
                    alert('请求错误...?!');
                },
                success:function(data)
                { //返回json结果
                    if (data == 1) {
                        alert('管理员用户名或密码错误!');
                    }
                }
            });
        });
    </script> -->
</body>

</html>