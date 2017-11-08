
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
   
<!-- </a>        <button class="btn btn-hollow" props-data-following="false" value="1">点击关注</button> -->
      
      
      </form>
          <!-- <a class="btn btn-hollow" href="/sign_in?utm_medium=not-signed-in-contribute-button&amp;utm_source=desktop">投稿</a> -->

        <div class="title">

          <a class="name" href="/c/RfYyQj">{{$pro -> name}}</a>

        </div>
        <div class="info">
          收录了{{ $title->count() }}篇文章
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
        <!-- <p class="title">专题公告</p> -->
        <div class="description js-description">
        <!--   <p>一缕墨香伴清茶。</p>

          <p>散文专题投稿须知：
          <br />1.字数适量。散文虽形式灵活篇幅短小，但字数太少者请改投诗专题。
          <br />2.排版简洁为好。请用段落间空行取代段首空两格。
          <br />3.语言优美形散神凝为佳。请尽量保证文章质量，首先得是散文吧。
          <br />4.谢绝密集投稿。为了读者和您有更好的专题体验，勿频繁投稿。
          <br />5.禁投广告。请不要在文章任何位置（尤其是图片）显示公众号、电话、微博、博客、QQ、二维码等信息。
          <br />6.鄙视抄袭。做复制粘贴的搬运工是非常low的表现，请你尊重原创和自己。
          <br />最后，无视最后两条者...</p> -->
                    <!-- <a data-action="toggle-description" class="open" href="javascript:void(null);">展开描述 <i class="iconfont ic-show"></i></a> -->
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
