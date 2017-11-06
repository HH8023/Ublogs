 @extends('home.public.parent')

@section('content')


 <div class="note">
  <div class="post">
    <div class="article">
       
        <h1 class="title">{{ $user->title }}</h1>
        
        <!-- 作者区域 -->
        <div class="author">
            
          <a class="avatar" href="/u/9ade34a08a3f">
            

            <img src="{{ asset('home/img/upload/'.$user->photo)}}" alt="96" />
           
</a>          <div class="info">
            <span class="name"><a href="/u/9ade34a08a3f">{{$user->nickname}}</a></span>
              <img class="badge-icon" data-toggle="tooltip" title="简书签约作者" src="{{ asset('home/picture/signed-9702260821906f0d953eab67a29f8e7a2d2e3d20960576347591283a3fbfd867.png')}}" alt="Signed" />
            <!-- 关注用户按钮 -->
            <div props-data-classes="user-follow-button-header" data-author-follow-button></div>
            <!-- 文章数据信息 -->
            <div class="meta">
              <!-- 如果文章更新时间大于发布时间，那么使用 tooltip 显示更新时间 -->
                <span class="publish-time">{{ $user->add_time }}</span>
            </div>
          </div>
          <!-- 如果是当前作者，加入编辑按钮 -->
        </div>
        <!-- -->

        <!-- 文章内容 -->
        <div data-note-content class="show-content">
          <div class="image-package">
         
            <img src="{{ asset('home/upload/'.$user->photo)}}">
           
            <br><div class="image-caption">星空宇宙</div>
          </div><p>{{ $artical_detail->content }}</p>

        </div>
        <!--  -->
          
        <div class="show-foot">
          <a class="notebook" href="/nb/3292078">
            <i class="iconfont ic-search-notebook"></i>
            <span>日记本</span>
</a>          <div class="copyright" data-toggle="tooltip" data-html="true" data-original-title="转载请联系作者获得授权，并标注“简书作者”。">
            © 著作权归作者所有
          </div>
          <div class="modal-wrap" data-report-note>
            <a id="report-modal">举报文章</a>
          </div>
        </div>
    </div>

    <!-- 文章底部作者信息 -->
      <div class="follow-detail">
        <div class="info">
          <a class="avatar" href="/u/9ade34a08a3f">
            <img src="{{ asset('home/img/upload/'.$user->photo)}}" alt="96" />
</a>          <div props-data-classes="user-follow-button-footer" data-author-follow-button></div>
          <a class="title" href="/u/9ade34a08a3f">{{ $user->nickname}}</a>
          <img class="badge-icon" data-toggle="tooltip" title="简书签约作者" src="{{ asset('home/picture/signed-9702260821906f0d953eab67a29f8e7a2d2e3d20960576347591283a3fbfd867.png')}}" alt="Signed" />
        </div>
          <div class="signature">情归教育的化学人，查理芒格主义的实践者</div>
      </div>

      <div class="support-author"></div>

    <div class="meta-bottom">

      <div class="btn like-group"></div>

      <div class="share-group">

        <a class="share-circle" data-action="weixin-share" data-toggle="tooltip" data-original-title="分享到微信">
          <i class="iconfont ic-wechat"></i>
        </a>
        <a class="share-circle" data-action="weibo-share" data-toggle="tooltip" href="" data-original-title="分享到微博">
          <i class="iconfont ic-weibo"></i>
        </a>
          <a class="share-circle" data-toggle="tooltip" href="http://cwb.assets.jianshu.io/notes/images/18402768/weibo/image_d87be4ea9203.jpg" target="_blank" data-original-title="下载长微博图片">
            <i class="iconfont ic-picture"></i>
          </a>
        <a class="share-circle more-share" tabindex="0" data-toggle="popover" data-placement="top" data-html="true" data-trigger="focus" href="javascript:void(0);" data-content='
          <ul class="share-list">

          </ul>
        '>更多分享</a>

      
      </div>
    </div>
 <!--评论  -->
 <style type="text/css">
   .input{left:500px;}
</style>
 
  <div>
   <div id="comment-list" class="comment-list">
    <div>
     <form class="new-comment" artion="{{ url('home/comment')}}" method='get'>
      
      <a class="avatar"><img src="//upload.jianshu.io/users/upload_avatars/8868582/b267cdcc-f186-40d3-bef9-8603052d1681?imageMogr2/auto-orient/strip|imageView2/1/w/114/h/114" /></a> 
      <textarea placeholder="写下你的评论..." name="c_content"></textarea> 
      <div class="write-function-block">
       <div data-v-b36e9416="" class="emoji-modal-wrap">
        <a data-v-b36e9416="" class="emoji"><i data-v-b36e9416="" class="iconfont ic-comment-emotions"></i></a> 
        <!---->
       </div> 
       <div class="hint">
        Ctrl+Return 发表
       </div> 
        
       <a class="btn btn-send" >发送</a> 
       <input type="submit" value="发送" id="fa">
       <a class="cancel">取消</a>
      </div>
     </form> 
     <!---->
    </div> 
    <div id="normal-comment-list" class="normal-comment-list">
     <div>
      <div>
       <div class="top">
        <span>69条评论</span> 
        <a class="author-only">只看作者</a> 
        <a class="close-btn" style="display: none;">关闭评论</a> 
        <div class="pull-right">
         <a class="active">按喜欢排序</a>
         <a class="">按时间正序</a>
         <a class="">按时间倒序</a>
        </div>
       </div>
      </div> 
      <!----> 
      <!----> 
      <div class="comments-placeholder" style="display: none;">
       <div class="author">
        <div class="avatar"></div> 
        <div class="info">
         <div class="name"></div> 
         <div class="meta"></div>
        </div>
       </div> 
       <div class="text"></div> 
       <div class="text animation-delay"></div> 
       <div class="tool-group">
        <i class="iconfont ic-zan-active"></i>
        <div class="zan"></div> 
        <i class="iconfont ic-list-comments"></i>
        <div class="zan"></div>
       </div>
      </div> 
      <div id="comment-17038686" class="comment">
       <div>
        <div class="author">
         <a href="/u/a50622e1a980" target="_blank" class="avatar"><img src="//upload.jianshu.io/users/upload_avatars/5170312/c92990f3e588.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/114/h/114" /></a> 
         <div class="info">
          <a href="/u/a50622e1a980" target="_blank" class="name">瘦子的胖子</a> 
          <!----> 
          <div class="meta">
           <span>7楼 &middot; 2017.11.06 12:34</span>
          </div>
         </div>
        </div> 
        <div class="comment-wrap">
         <p>111</p> 
         <div class="tool-group">
          <a class=""><i class="iconfont ic-zan"></i> <span>4人赞</span></a> 
          <a class=""><i class="iconfont ic-comment"></i> <span>回复</span></a> 
          <a class="report"><span>举报</span></a> 
          <!---->
         </div>
        </div>
       </div> 
       <div class="sub-comment-list">

        
        <div class="sub-comment more-comment">
         <a class="add-comment-btn"><i class="iconfont ic-subcomment"></i> <span>添加新评论</span></a> 
         <span class="line-warp"> 还有2条评论， <a>展开查看</a></span> 
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>



 <!-- 结尾 -->
    <div id="vue_comment"></div>
   
  </div>

  <div class="vue-side-tool"></div>
</div>
<!-- <div class="note-bottom">
  <div class="js-included-collections"></div>
    
      <style type="text/css">
          #dv{width:500px;height:50px;border:1 solid #ccc;left:319px;top:800px;position:absolute;color: #ccc;}
      </style>
    <div> -->
       <!-- <input type="text" name="" id="dv" onclick="func()"> -->
       
 <!--    </div>

     <script type="text/javascript">
         var input = document.getElementsByTagName('input');
            var input = function func(){
                  
              }
     </script>

  <div data-vcomp="recommended-notes" data-lazy="1.5" data-note-id="18402768"></div>
</div> -->

    
<!--     
    <script src="{{ asset('home/js /babel-polyfill-676833c6a4d68573b4c3.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('home/js /web-base-9e640fd8a4bb1abb5d6a.js')}}" crossorigin="anonymous"></script>
<script src="{{ asset('home/js /web-06eafca9d97868f774e0.js')}}" crossorigin="anonymous"></script>
    
    <script src="{{ asset('home/js /entry-37ae343705bf2e1a86d5.js')}}" crossorigin="anonymous"></script>
    <script>
  (function(){
      var bp = document.createElement('script');
      var curProtocol = window.location.protocol.split':(')[0];
      if (curProtocol === 'https') {
          bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
      }
      else {
          bp.src = 'http://push.zhanzhang.baidu.com/push.js';
      }
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(bp, s);
  })();
</script>

  </body>
</html> -->




@endsection