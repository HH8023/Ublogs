@extends('home.public.parent')

@section('content')
    
<div class="note">
  <div class="post">
    <div class="article">
    @foreach($art as $a)
        <h1 class="title">{{$a -> title}}</h1>

        <!-- 作者区域 -->
        <div class="author">
          <a class="avatar" href="/u/9ade34a08a3f">
          @foreach($uid as $b)
          @if($b->uid == $a->user_id)
            <img src="{{ asset('admin/assets/img/upload/'.$b->photo) }}" alt="96" />
</a>          <div class="info">
            <span class="name"><a href="/u/9ade34a08a3f">{{ $b->nickname}}</a></span>
              <img class="badge-icon" data-toggle="tooltip" title="ublog签约作者" src="{{ asset('home/picture/signed-9702260821906f0d953eab67a29f8e7a2d2e3d20960576347591283a3fbfd867.png')}}" alt="Signed" />
              @endif
          @endforeach
            <!-- 关注用户按钮 -->
            <div props-data-classes="user-follow-button-header" data-author-follow-button></div>
            <!-- 文章数据信息 -->
            <div class="meta">
              <!-- 如果文章更新时间大于发布时间，那么使用 tooltip 显示更新时间 -->
                <span class="publish-time">{{ $a -> add_time }}</span>
              
            </div>
          </div>
          <!-- 如果是当前作者，加入编辑按钮 -->
        </div>
        <!-- -->
@endforeach
        <!-- 文章内容 -->
        <div data-note-content class="show-content">
          <div class="image-package">
<img src="{{ asset('/'.$a->photo) }}"><br><div class="image-caption"></div>
</div><br>
@foreach($det as $b)
        {{ $b -> content }}
@endforeach
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
@foreach($art as $a)
        <!-- 文章底部作者信息 -->
      <div class="follow-detail">
        <div class="info">
          <a class="avatar" href="/u/9ade34a08a3f">
          @foreach($uid as $b)
          @if($b->uid == $a->user_id)
            <img src="{{ asset('admin/assets/img/upload/'.$b->photo) }}" alt="96" />
</a>          <div props-data-classes="user-follow-button-footer" data-author-follow-button></div>
          <a class="title" href="/u/9ade34a08a3f">{{ $b->nickname}}</a>
          <img class="badge-icon" data-toggle="tooltip" title="简书签约作者" src="{{ asset('home/picture/signed-9702260821906f0d953eab67a29f8e7a2d2e3d20960576347591283a3fbfd867.png') }}" alt="Signed" />
        </div>
          
          @endif
          @endforeach
      </div>
@endforeach
      <div class="support-author"></div>

    <div id="vue_comment"></div>
  </div>

  <div class="vue-side-tool"></div>
</div>



<div class="note-bottom">
  <div class="js-included-collections"></div>
  <div data-vcomp="recommended-notes" data-lazy="1.5" data-note-id="18402768"></div>
</div>
@endsection