
@extends('home.public.parent')

@section('content')



<div class="container collection">
  <div class="row">
    <div class="col-xs-24 col-sm-16 main">
      <!-- 专题头部模块 -->
      <div class="main-top">
        <a class="avatar-collection" href="/c/RfYyQj">
     
          <img src="{{ asset('upload/'.$pro->photo) }}" alt="240" />
      <form id="frm" action="{{ url('home/article') }}">
   
</a>        <button class="btn btn-hollow" props-data-following="false" value="1">点击关注</button>
      
      
      </form>
          <a class="btn btn-hollow" href="/sign_in?utm_medium=not-signed-in-contribute-button&amp;utm_source=desktop">投稿</a>

        <div class="title">

          <a class="name" href="/c/RfYyQj">{{$pro -> name}}</a>

        </div>
        <div class="info">
          收录了{{ $title->count() }}篇文章 · 1296897人关注
        </div>
      </div>
      <ul class="trigger-menu" data-pjax-container="#list-container"><li class=""></li><li class="active"><a href="/c/RfYyQj?order_by=added_at"><i class="iconfont ic-articles"></i> 最新收录</a></li><li class=""></li></ul>
      <div id="list-container">
        <!-- 文章列表模块 -->
<ul class="note-list" infinite-scroll-url="/c/RfYyQj?order_by=added_at">  
@foreach ($title as $a)
<li id="note-18488998" data-note-id="18488998" class="have-img"> 

    <a class="wrap-img" target="_blank">
     <img data-echo="{{ asset('/'.$a->photo) }}" class="img-blur" src="{{ asset('/'.$a->photo) }}" alt="120" />
    </a>
    @foreach ($uid as $c)
     @if( $a->user_id == $c->uid)
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/ffc3f74f4040">
        <img src="{{ asset('admin/assets/img/upload/'.$c->photo) }}" alt="64" />
      </a>      
      <div class="name">
        <a class="blue-link" target="_blank" href="/u/ffc3f74f4040">{{$c->nickname}}</a>
        <span class="time" data-shared-at="{{ $a -> add_time }}"></span>
      </div>
    </div>   
     @endif
    @endforeach
    <a class="title" target="_blank" href="{{ url('home/details/'.$a->id)}}">{{ $a->title }}</a>
   @foreach ($aid as $b)
   @if( $a->id == $b->art_id)
    <p class="abstract">
      {{$b->art_synopsis}}<b>...</b>
   </p> 
    @endif
    @endforeach
    <div class="meta">
      <a target="_blank" href="/p/0b29dd73b5c8">
        <i class="iconfont ic-list-read"></i> 27
</a>        <a target="_blank" href="/p/0b29dd73b5c8#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 4</span>
    </div>
  </div>
</li>


 @endforeach
 </ul>
      </div>
    </div>
    <div class="col-xs-24 col-sm-7 col-sm-offset-1 aside">
        <p class="title">专题公告</p>
        <div class="description js-description">
          <p>一缕墨香伴清茶。</p>

<p>散文专题投稿须知：
<br />1.字数适量。散文虽形式灵活篇幅短小，但字数太少者请改投诗专题。
<br />2.排版简洁为好。请用段落间空行取代段首空两格。
<br />3.语言优美形散神凝为佳。请尽量保证文章质量，首先得是散文吧。
<br />4.谢绝密集投稿。为了读者和您有更好的专题体验，勿频繁投稿。
<br />5.禁投广告。请不要在文章任何位置（尤其是图片）显示公众号、电话、微博、博客、QQ、二维码等信息。
<br />6.鄙视抄袭。做复制粘贴的搬运工是非常low的表现，请你尊重原创和自己。
<br />最后，无视最后两条者...</p>
          <a data-action="toggle-description" class="open" href="javascript:void(null);">展开描述 <i class="iconfont ic-show"></i></a>
        </div>
      <div class="share">
        <span>分享到</span>
        <a class="option" href="javascript:void((function(s,d,e,r,l,p,t,z,c){var%20f=&#39;http://v.t.sina.com.cn/share/share.php?appkey=1881139527&#39;,u=z||d.location,p=[&#39;&amp;url=&#39;,e(u),&#39;&amp;title=&#39;,e(t||d.title),&#39;&amp;source=&#39;,e(r),&#39;&amp;sourceUrl=&#39;,e(l),&#39;&amp;content=&#39;,c||&#39;gb2312&#39;,&#39;&amp;pic=&#39;,e(p||&#39;&#39;)].join(&#39;&#39;);function%20a(){if(!window.open([f,p].join(&#39;&#39;),&#39;mb&#39;,[&#39;toolbar=0,status=0,resizable=1,width=440,height=430,left=&#39;,(s.width-440)/2,&#39;,top=&#39;,(s.height-430)/2].join(&#39;&#39;)))u.href=[f,p].join(&#39;&#39;);};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();})(screen,document,encodeURIComponent,&#39;&#39;,&#39;&#39;,&#39;http://upload.jianshu.io/collections/images/12/1239240801.jpg&#39;, &#39;推荐专题《散文》（ 分享自 @简书 ）&#39;,&#39;http://www.jianshu.com/c/RfYyQj?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=weibo&#39;,&#39;页面编码gb2312|utf-8默认gb2312&#39;));"><i class="iconfont ic-share-weibo"></i></a>
        <a class="option" data-action="weixin-share"><i class="iconfont ic-share-wechat"></i></a>
        <a class="option" tabindex="0" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="focus" href="javascript:void(0);" data-content='
          <ul class="share-list">
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=&#39;+e(&#39;http://www.jianshu.com/c/RfYyQj?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=qzone&#39;)+&#39;&amp;title=&#39;+e(&#39;推荐专题《散文》&#39;),x=function(){if(!window.open(r,&#39;qzone&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-zone"></i><span>分享到QQ空间</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://twitter.com/share?url=&#39;+e(&#39;http://www.jianshu.com/c/RfYyQj?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=twitter&#39;)+&#39;&amp;text=&#39;+e(&#39;推荐专题《散文》（ 分享自 @jianshucom ）&#39;)+&#39;&amp;related=&#39;+e(&#39;jianshucom&#39;),x=function(){if(!window.open(r,&#39;twitter&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-twitter"></i><span>分享到Twitter</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://www.facebook.com/dialog/share?app_id=483126645039390&amp;display=popup&amp;href=http://www.jianshu.com/c/RfYyQj?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=facebook&#39;,x=function(){if(!window.open(r,&#39;facebook&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-facebook"></i><span>分享到Facebook</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://plus.google.com/share?url=&#39;+e(&#39;http://www.jianshu.com/c/RfYyQj?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=google_plus&#39;),x=function(){if(!window.open(r,&#39;google_plus&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-google"></i><span>分享到Google+</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,s1=window.getSelection,s2=d.getSelection,s3=d.selection,s=s1?s1():s2?s2():s3?s3.createRange().text:&#39;&#39;,r=&#39;http://www.douban.com/recommend/?url=&#39;+e(&#39;http://www.jianshu.com/c/RfYyQj?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=douban&#39;)+&#39;&amp;title=&#39;+e(&#39;散文&#39;)+&#39;&amp;sel=&#39;+e(s)+&#39;&amp;v=1&#39;,x=function(){if(!window.open(r,&#39;douban&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r+&#39;&amp;r=1&#39;};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})()"><i class="social-icon-sprite social-icon-douban"></i><span>分享到豆瓣</span></a></li>
          </ul>
        '><i class="iconfont ic-share-more"></i></a>
      </div>
      <div class="side-list"></div>
    </div>
  </div>
</div>
<div data-vcomp="side-tool"></div>

  <script>

  $('#frm').click(function() {
      if (2) {
        alert(11);
      };
      

      
    });
</script>
@endsection
