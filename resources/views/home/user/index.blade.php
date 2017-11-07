@extends('home.public.parent')

@section('content')

<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">

            <div class="user-info">
                <!--标题 -->
                <div class="am-cf am-padding">
                    <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong></div>
                </div>
                <hr/>
                <form class="am-form am-form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/home/douser/'.$users->uid) }}">
                    {{ csrf_field() }}

                <!--头像 -->
                <div class="user-infoPic">

                    <div class="avatar" style="width: 80px;height: 80px;">
                        <input type="file"  class="inputPic" name="u_photo" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*" >
                        <img class="am-circle am-img-thumbnail" src="{{ asset('./upload/'.$users->u_photo) }}" alt="240"  />
                    </div>

                    <p class="am-form-help">头像</p>

                    <div class="info-m">
                        <div><b>手机号：<i>{{ $users->tel }}</i></b></div>
                    </div>
                </div>

                <!--个人信息 -->
                <div class="info-main">
                    
                        <div class="am-form-group">
                            <label for="user-name2" class="am-form-label">昵称</label>
                            <div class="am-form-content">
                                <input type="text" id="user-name2" name="nickname" value="{{ $users->nickname}}" >

                            </div>
                        </div>
                        
                        <div class="am-form-group">
                            <label class="am-form-label">性别</label>
                            <div class="am-form-content sex">
                                <select class="col-xs-10 col-sm-5" name="sex" value="{{ $users->sex }}" id="form-field-1">
                                    <option value="">--请选择--</option>
                                    <option value="2" @if($users->sex == 2) selected @endif>女</option>
                                    <option value="1" @if($users->sex == 1) selected @endif>男</option>
                                </select>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-form-label">生日</label>
                            <div class="am-form-content">
                                <input type="date"  id="user-name2" name="birthday" value="{{ $users->birthday }}" placeholder="birthday">

                            </div>
                        </div>
                    
                        <div class="info-btn">
                            <input type="submit" class="am-btn am-btn-danger" value="保存修改">
                        </div>

                    </form>
                </div>

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
                    <!-- <li><a href="{{ url('home/user/password') }}">修改密码</a></li> -->
                </ul>
            </li>
            <li class="person">
                <ul>
                    <!-- <li><a href="{{ url('home/user/article') }}">我的文章</a></li> -->
                    <!-- <li><a href="{{ url('home/user/comment') }}">我的评论</a></li> -->
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