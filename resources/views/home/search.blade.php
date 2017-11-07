@extends('home.public.parent')

@section('content')

    <div class="container search">
        
        <div class="col-xs-16 col-xs-offset-1 main">
            <div class="top">
                <div class="relevant">
                    <div class="container-fluid list">
                        <!-- <div class="col-xs-8">
                            <a href="http://www.jianshu.com/c/26354908b15e" target="_blank" class="avatar-collection"><img src="%E6%90%9C%E7%B4%A2%20-%20123%20-%20%E7%AE%80%E4%B9%A6_files/p2251450614.jpg"></a> 
                            <div class="info">
                                <a href="http://www.jianshu.com/c/26354908b15e" target="_blank" class="name">道士下山 (2015)</a> 
                                <div class="meta">16 文章・65 关注</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div> 
            <div class="search-content">
                @foreach($artical_list as $li)
                @foreach($user_infos as $v)
                @if( $li->user_id ==  $v->uid )
                <ul class="note-list" infinite-scroll-url="/">
                    <li id="note-18477749" data-note-id="18477749" class="have-img">
                        <a class="wrap-img" href="{{ url('home/details/'.$li->art_id)}}"> 
                            <img data-echo="{{ asset($li->photo) }}" class="img-blur" src="{{ asset($li->photo) }}" alt="120" />
                        </a> 
                        <div class="content">
                            <div class="author">
                                <a class="avatar" href="/"><img src="{{ asset('/admin/img/'.$v->u_photo) }}"></a>   <!-- 头像 --><!-- 点击进入 作者主页 -->
                                <div class="name">
                                    <a class="blue-link" target="_blank" href="">1</a>  <!-- 作者 --><!-- 点击进入 作者主页 -->
                                    <span class="time" data-shared-at="{{ $li->add_time }}"></span>
                                </div>                           
                            </div>                         
                            <a href="{{ url('home/details/'.$li->art_id)}}" target="_blank" class="title">{{ $li->title }}</a> 
                            <p class="abstract">{{ $li->art_synopsis }}</p> 
                        </div>
                    </li>
                </ul>
                @endif
                @endforeach
                @endforeach
                <div>
                    <!-- <ul class="pagination">
                        <li><a href="" class="active">1</a></li> 
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                        <li><a>4</a></li> 
                        <li><a>下一页</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

    @endsection