@extends('home.public.parent')

@section('content')

<!-- Banner -->
<div id="indexCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="item active"><div class="banner"><a target="_blank"><img src="{{ asset('home/picture/f9fc7f3cdb0a714ee27e75313ca1228f8c382542_1.jpg') }}" alt="540" /></a></div></div>     
        <div class="item "><div class="banner"><a target="_blank"><img src="{{ asset('home/picture/5807b3a193a469cd47967f514cf63141ab0843f1_1.jpg') }}" alt="540" /></a></div></div>
        <div class="item "><div class="banner"><a target="_blank"><img src="{{ asset('home/picture/95dba664dfa5414b0610a0f484098787818fa109_1.jpg') }}" alt="540" /></a></div></div>
        <div class="item "><div class="banner"><a target="_blank"><img src="{{ asset('home/picture/fc8a519c358534c451ca48acca2f603a3f68d0bf_1.jpg') }}" alt="540" /></a></div></div>
        <div class="item "><div class="banner"><a target="_blank"><img src="{{ asset('home/picture/6950ffb012eaf3bfeb513e7befa94751ae22fed2_1.png') }}" alt="540" /></a></div></div>
        <div class="item "><div class="banner"><a target="_blank"><img src="{{ asset('home/picture/595da283c527291bf78adae750cb429bf2a1c22d_1.jpg') }}" alt="540" /></a></div></div>
        <div class="item "><div class="banner"><a target="_blank"><img src="{{ asset('home/picture/7ab7e22f4938b226687e0f71d82e43f950c6cfe4_1.jpg') }}" alt="540" /></a></div></div>
    </div>
    <a class="left carousel-control" href="#indexCarousel" role="button" data-slide="prev"><i class="iconfont ic-previous-s"></i></a>
    <a class="right carousel-control" href="#indexCarousel" role="button" data-slide="next"><i class="iconfont ic-next-s"></i></a>
</div>

<!-- Banner -->
<div class="col-xs-16 main">
    <div class="recommend-collection">
        @foreach($subject as $v)
        <a class="collection" target="_blank" href=""><img src="{{ url('./upload/'.$v->photo) }}"><div class="name">{{ $v->name }}</div></a><!-- 栏目专栏 点击进入栏目列表 -->
        @endforeach
    </div>
    <div class="split-line"></div>
        <div id="list-container">
        <!-- 文章列表模块 -->
        @foreach($user as $us)
        @foreach( $artical_detail as $art )
        @if( $us->id ==  $art->art_id )

        <ul class="note-list" infinite-scroll-url="/">
             
            <li id="note-18477749" data-note-id="18477749" class="have-img">
                <a class="wrap-img" href="{{ url('/home/article/') }}"> 
                   
                    <img class="img-blur" src="">
                </a>                                            
                <div class="content">
                     
                    <div class="author">
                        <a class="avatar" href="/"><img src="{{ url('admin/assets/img/upload') }}"></a>   <!-- 头像 --><!-- 点击进入 作者主页 -->
                        <div class="name">
                            <a class="blue-link" target="_blank" href="">1</a>  <!-- 作者 --><!-- 点击进入 作者主页 -->
                            <span class="time" data-shared-at="{{ $us->add_time }}"></span>
                        </div>
                    </div>
                    <a class="title" href="{{ url('home/details/'.$art->art_id)}}">{{ $us->title }}</a>
                    <p class="abstract">{{ $art->content }} </p>     
                    <div class="meta">
                        <!-- <a class="collection-tag" target="_blank"></a> -->
                        <!-- <a target="_blank" href=""><i class="iconfont ic-list-read"></i> </a> -->
                    </div>
                </div>
            </li>
             
        </ul>
        @endif
        @endforeach
        @endforeach
        <!-- 文章列表模块完毕 -->
    </div>
</div>
<div class="col-xs-7 col-xs-offset-1 aside">
    @foreach($advert as $v)
    <div class="board">
        <a target="_blank" href="/recommendations/notes?category_id=56&amp;utm_medium=index-banner-s&amp;utm_source=desktop"><img src="{{ url('./image/'.$v->ad_image) }}"></a>
               
    </div>

    <!-- 首页右侧 广告 -->
    <!-- 广告 -->
    <div class="jianshu-daily">
        <div class="title">
        广告区域
            <a target="_blank" href=""></a>
        </div>
        <a target="_blank" class="note" href="welcome.php">
            <img src="{{ url('./image/'.$v->ad_image) }}" alt="96" />
            <div class="note-title">{{ $v->ad_title }}</div>
        </a>                    
    </div>
    @endforeach 

  <!-- 广告 -->
    <div data-vcomp="recommended-author-list"></div>
</div>

<div data-vcomp="side-tool"></div>

@endsection
