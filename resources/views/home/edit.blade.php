<!DOCTYPE html>
 <html> 
<head>
  <meta charset="utf-8">
  <style type="text/css">
   #dv{width:2000px;height:655px;position:absolute;top:0px;left:0px;}
   
 </style>
</head>
<body>
   <div id="dv">
   <img src="{{ asset('home/img/qq.jpg')}}" style="width:2000px;height:655px;">
   </div>
 
  <link rel="stylesheet" media="all" href="{{ asset('home/css/web-b6ffb2ef57d077ea3cf8_6.css') }}" />
  
  <link rel="stylesheet" media="all" href="{{ asset('home/css/entry-568c39093a4cda20e253_1.css') }}" />
  <!--  -->
   <script type="application/json" data-name="page-data">{"user_signed_in":false,"locale":"zh-CN","os":"other","read_mode":"day","read_font":"font2"}</script>
    
    <script src="js/babel-polyfill-676833c6a4d68573b4c3_1.js" crossorigin="anonymous"></script>
    <script src="js/web-base-9e640fd8a4bb1abb5d6a_5.js" crossorigin="anonymous"></script>
<script src="js/web-06eafca9d97868f774e0_5.js" crossorigin="anonymous"></script>
    
    <script src="js/entry-bc590a7721c32bb9089a_1.js" crossorigin="anonymous"></script>


   
  <!--  --> 
  <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav">
            <li class="active">
              <a href="{{ url('/home/index') }}" style="left:240px">
                <span class="menu-text">首页</span><i class="iconfont ic-navigation-discover menu-icon"></i>
              </a>            
            </li>
        </ul>
  </div>


      @if (session('msg'))
          <script>
              alert("{{ session('msg') }}");
          </script>
      @endif

   
   <div id="widget">
   <form action="{{ url('home/add') }}" method='post' class="am-form tpl-form-border-form" enctype="multipart/form-data" style="width:500px;position:relative;left:270px">
     {{ csrf_field() }}
   <!-- 图片 -->
      
      <div class="am-form-group">
          <div class="am-u-sm-9">
               <div class="result_wrap">
                  <ul class="list_btn">
                      <li><input name="photo" type="file" required><span onclick="pic_minus(this)"><i class="fafa-minus-circle"></i></span></li>
                  </ul>
              </div>
          </div>
      </div>
    <!--  -->
    <input type="hidden" name="add_time" value="{{ date('Y-m-d H:i:s') }}">
   <!--  -->
  <!--   栏　　目:<input type="text" style="width:500px;height:30px;" placeholder="栏目" name="pro_id"><br><br> -->
    <div class='medio-body'>
      栏　　目:<select class='form-control m-b-10' name="pro_id" id="" style="width:500px;height:30px;">
            <option value=''>--请选择--</option>
            <option  value="3">IT</option>
            <option  value="2">新鲜事物</option>
            <option  value="4">古典</option>
        </select>
    </div><br><br>
    
    <!--  -->
    文章简介:<input type="text" style="width:500px;height:30px;" placeholder="文章简介" name="art_synopsis" style="background:EBF7F8"><br><br>


      标　　题:<input type="text" style="width:500px;height:30px;" placeholder="标题" name="title">

                
                <div class="am-form-group">
                    <label for="user-intro" class="am-u-sm-12 am-form-label  am-text-left">文章内容</label>
                    <div class="am-u-sm-12 am-margin-top-xs " >
                        <!-- <textarea name="content" class="" rows="10" id="user-intro" placeholder="请输入文章内容"></textarea> -->

                        <script type="text/javascript" charset="utf-8" src="{{ asset('utf8-php\ueditor.config.js') }}" ></script>
                        <script type="text/javascript" charset="utf-8" src="{{ asset('utf8-php\ueditor.all.min.js') }}" > </script>
                        <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                        <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                        <script type="text/javascript" charset="utf-8" src="{{ asset('utf8-php\lang/zh-cn/zh-cn.js') }}" ></script>

                        <script id="editor" name="content" type="text/plain" style="..."></script>
                        <script>
                            var ue = UE.getEditor('editor', {
                              toolbars: [
                                  ['fullscreen', 'source', 'undo', 'redo', 'bold']
                              ],
                              autoHeightEnabled: true,
                              autoFloatEnabled: true,
                              elementPathEnabled: false
                          });
                          ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
                           function hui(aid)
                            {
                                var content = ue.getContentTxt();
                                $.post("home/add", {'content':content, 'aid':aid, '_token':'{{csrf_token()}}'}, function(data){
                                    alert(data);
                                    window.location = '';
                                });
                            }
                        </script>
                    </div>
                </div>
           
                <div class="am-form-group">
                    <div class="am-u-sm-12 am-u-sm-push-12">
                        <input type="submit" onclick="" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交">
                    </div>
                </div>
            </form>
        </div>
        <!-- <script type="text/javascript">
            var ue = UE.getEditor('editor', {
                toolbars: [
                    ['fullscreen', 'source', 'undo', 'redo', 'bold']
                ],
                autoHeightEnabled: true,
                autoFloatEnabled: true,
                elementPathEnabled: false
            });
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');

            function hui(aid)
            {
                var content = ue.getContentTxt();
                $.post("home/add", {'content':content, 'aid':aid, '_token':'{{csrf_token()}}'}, function(data){
                    alert(data);
                    window.location = '';
                });
            }

        </script> -->
</body>
</html>