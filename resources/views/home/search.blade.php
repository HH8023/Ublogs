@extends('home.public.parent')

@section('content')

<div class="aside">
    <div class="col-xs-16 col-xs-offset-8 main">
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
            <ul class="note-list">
                <li>
                    <div class="content">
                        @foreach($artical_list as $li)
                        @foreach($user_infos as $v)
                        @if( $li->user_id ==  $v->uid )                        
                        <div class="author">                            
                            <a href="" target="_blank" class="avatar">
                            <img src="{{ $v->photo }}"></a> 
                            <div class="name">                                
                                <a href="">{{ $v->nickname }}</a>
                                <span class="{{ $li->add_time }}">{{ $li->add_time }}</span>
                            </div>                           
                        </div>                         
                        <a href="" target="_blank" class="title">{{ $li->title }}</a> 
                        <p class="abstract">{{ $li->art_synopsis }}</p>
                        @endif
                        @endforeach
                        @endforeach 
                    </div>
                </li>
            </ul> <!----> <!----> <!----> 
            <div>
                <ul class="pagination"><!---->  
                    <li><a href="" class="active">1</a></li> 
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                    <li><a>4</a></li> 
                    <li><a>下一页</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


    @endsection