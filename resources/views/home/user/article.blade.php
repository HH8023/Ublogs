@extends('home.public.parent')

@section('content')


<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">

            <div class="user-comment">
                <!--标题 -->
                <div class="am-cf am-padding">
                    <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">我的文章</strong></div>
                </div>
                <hr/>

                <div class="am-tabs am-tabs-d2 am-margin" data-am-tabs>

                    

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">

                            <div class="comment-main">
                                <div class="comment-list">
                                    <ul class="item-list">

                                        
                                        <div class="comment-top">
                                        <a href="*">php真好真好真的好</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--底部-->
        <div class="footer">
            
            <div class="footer-bd">
                <p>
                    <a href="#">关于Ublog</a>
                    <a href="#">合作伙伴</a>
                    <a href="#">联系我们</a>
                    
                    <em>© 2015-2017 Ublog 版权所有
                </p>
            </div>
        </div>
    </div>

<aside class="menu">
        <ul>
            
            <li class="person">
                <span>个人设置</span>
            </li>
            <li class="person">
                <ul>
                    <li><a href="{{ url('home/user') }}">个人中心</a></li>
                    <li><a href="{{ url('home/user/password') }}">修改密码</a></li>
                </ul>
            </li>
            <li class="person">
                <ul>
                    <li><a href="{{ url('home/user/article') }}">我的文章</a></li>
                    <li><a href="{{ url('home/user/comment') }}">我的评论</a></li>
                </ul>
            </li>
            <li class="person">
                <ul>
                    <!-- <li> <a href="news.html">我的关注</a></li> -->
                </ul>
            </li>
        </ul>
    </aside>
</div>

@endsection