<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员中心</title>
<!--[if IE]>
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/jiazaitoubu.css">
<link rel="stylesheet" type="text/css" href="css/css.css">
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/index2.js"></script>
<link rel="stylesheet" type="text/css" href="css/center.css">
<!--城市联动-->
<link rel="stylesheet" type="text/css" href="city/city.css">
<script src="city/Popt.js"></script>
<script src="city/cityJson.js"></script>
<script src="city/citySet.js"></script>
</head>
<body>
<!--top-->
<div class="top" id="wyqtb">
	<div class="top_in">
    	<em>地区选择</em>
        <!--插入插件-->
        <input type="text" id="city" style=" margin-top:8px; font-size:12px; text-align:center; color:#343434; height:24px; float:left" value="请输入地址范围..."/>
        <script type="text/javascript">
			$("#city").click(function (e) {
				SelCity(this,e);
			});
		</script>
        <!--注册/登录-->
        <div class="zcdl">
        	<a href="#">注册</a>
            <i></i>
            <a href="#">登录</a>
        </div>
        <!--客服电话-->
        <div class="kfdh">
        	客服热线：400-9022-567
        </div>
        <!--手机微信-->
        <div class="sjwx">
        	<em title="微信公众号" id="wxgzh"><img src="images/weixin.png"/></em>
            <em title="移动app" id="sjapp"><img src="images/shouji.png"/></em>
            <b class="wxgzh none"><img src="images/乐乐公众号.jpg"/ width="80" height="80"></b>
            <b class="sjapp none"><img src="images/乐乐官网二维码.jpg"/ width="80" height="80"></b>
        </div>
    </div>
</div>
<!--导航加搜索框-->
<div style=" width:100%; height:auto; background:#fff">
<div class="dhjssk">
	<a href="#" class="logo"><img src="images/logo.png"/></a>
    <div class="searchk">
    	<div class="sjhcp">
        	<!--left-->
        	<div class="sjhcp_in">
            	<span>商家</span>
                <div class="little_list">
                	<em>菜品</em>
                    <em>商家</em>
                </div>
            </div>
            <script>
				//模拟下拉菜单的js*/
				$(".sjhcp_in span").on("mouseenter", function(e){
					if($(".little_list").is(":hidden")){
						$(".little_list").show();
					}else{
						$(".little_list").hide();
					}
						$(".little_list em").click(function(){
							var txt=$(this).text();
							$(".sjhcp_in span").text(txt);
							$(".little_list").hide();
						})
						$(document).one("click", function(){
							$(".little_list").hide();
						});
							e.stopPropagation();
					});
						$(".little_list").on("click", function(e){
						e.stopPropagation();
				});
            </script>
            <!--right-->
            <div class="jiantou"><img src="images/jiantou.png"/></div>
        </div>
    	<input type="text" style="width:307px;height:40px;background:#fff;float:left; font-size:16px; color:#adadad; text-indent:16px;line-height:40px" value="请输入..." onfocus="if(value=='请输入...') {value=''}" onblur="if (value=='') {value='请输入...'}">
        <div class="ssl"><img src="images/fangdajing.png"/></div>
    </div>
    <!--我们的优势-->
    <div class="wmdys">
    	<ul>
        	<li><b style="background:url(images/wmdys.png) no-repeat 0 0"></b><p>金牌商家</p></li>
            <li><b style="background:url(images/wmdys.png) no-repeat -36px 0"></b><p>提前预定</p></li>
            <li><b style="background:url(images/wmdys.png) no-repeat -72px 0"></b><p>放心安全</p></li>
        </ul>
    </div>
    <!--热门搜索-->
    <div class="hot_ss">
    	<a href="#">川菜</a>
        <a href="#">粤菜</a>
        <a href="#">火锅</a>
        <a href="#">家常菜</a>
        <a href="#">快餐</a>
        <a href="#">海鲜</a>
        <a href="#">牛排</a>
        <a href="#">蛋糕</a>
    </div>
</div>
</div>
<!--导航-->
<div class="dao_hang">
	<div class="nav_css">
    	<!--右下侧广告-->
        <div class="advertisement" style="display:none">
        	<h4>最新公告</h4>
            <div class="notice_new">
            	<p><a href="#">【优选】金秋聚会，买一送一</a></p>
                <p><a href="#">【优选】中秋嘉年华，好礼钜惠</a></p>
                <p><a href="#">【优选】冰点破纪录，低价不猫腻</a></p>
                <p><a href="#">【优选】开学季，“纸”想“净、净”学习</a></p>
                <p><a href="#">【优选】金秋聚会，买一送一</a></p>
                <p><a href="#">【优选】中秋嘉年华，好礼钜惠</a></p>
                <p><a href="#">【优选】开学季，“纸”想“净、净”学习</a></p>
            </div>
            <a href="#">
            	<div class="notice_img">
            	    <img src="images/activity.jpg" class="img1">
                    <img src="images/activity.jpg" class="img2">
                </div>
            </a>
            <!--<script>
			$(function(){
				$(".notice_img")
				})
            </script>-->
        </div>
    	<!--全部商品分类-->
    	<div class="important"><img src="images/all_list.png" style=" margin-top:13px">&nbsp;全部商品分类
        	<div class="aside">
            	<ul>
                	<li class="cates"  mt-ct="list01">
                    	<!--<h3>卫生洁具</h3>-->
                        <p>
                        	<a href="#">川菜</a>
                            <a href="#">粤菜</a>
                            <a href="#">闽菜</a>
                            <a href="#">鲁菜</a>
                            <a href="#">浙菜</a>
                            <a href="#">湘菜</a>
                            <a href="#">徽菜</a>
                            <a href="#">淮扬菜</a>
                            <!--<i style="font-family:'宋体';color:#666; line-height:23px; font-size:14px; float:left">></i>-->
                        </p>
                    </li>
                    <li class="cates"  mt-ct="list02">
                    	<!--<h3>卫生洁具</h3>-->
                        <p>
                        	<a href="#">川菜</a>
                            <a href="#">粤菜</a>
                            <a href="#">闽菜</a>
                            <a href="#">鲁菜</a>
                            <a href="#">浙菜</a>
                            <a href="#">湘菜</a>
                            <a href="#">徽菜</a>
                            <a href="#">淮扬菜</a>
                            <!--<i style="font-family:'宋体';color:#666; line-height:23px; font-size:14px; float:left">></i>-->
                        </p>
                    </li>
                    <li class="cates"  mt-ct="list03">
                    	<!--<h3>卫生洁具</h3>-->
                        <p>
                        	<a href="#">川菜</a>
                            <a href="#">粤菜</a>
                            <a href="#">闽菜</a>
                            <a href="#">鲁菜</a>
                            <a href="#">浙菜</a>
                            <a href="#">湘菜</a>
                            <a href="#">徽菜</a>
                            <a href="#">淮扬菜</a>
                            <!--<i style="font-family:'宋体';color:#666; line-height:23px; font-size:14px; float:left">></i>-->
                        </p>
                    </li>
                    <li class="cates"  mt-ct="list04">
                    	<!--<h3>卫生洁具</h3>-->
                        <p>
                        	<a href="#">川菜</a>
                            <a href="#">粤菜</a>
                            <a href="#">闽菜</a>
                            <a href="#">鲁菜</a>
                            <a href="#">浙菜</a>
                            <a href="#">湘菜</a>
                            <a href="#">徽菜</a>
                            <a href="#">淮扬菜</a>
                            <!--<i style="font-family:'宋体';color:#666; line-height:23px; font-size:14px; float:left">></i>-->
                        </p>
                    </li>
                    <li class="cates"  mt-ct="list05">
                    	<!--<h3>卫生洁具</h3>-->
                        <p>
                        	<a href="#">川菜</a>
                            <a href="#">粤菜</a>
                            <a href="#">闽菜</a>
                            <a href="#">鲁菜</a>
                            <a href="#">浙菜</a>
                            <a href="#">湘菜</a>
                            <a href="#">徽菜</a>
                            <a href="#">淮扬菜</a>
                            <!--<i style="font-family:'宋体';color:#666; line-height:23px; font-size:14px; float:left">></i>-->
                        </p>
                    </li>
                </ul>
            </div>
            <!--侧边栏的展开项-->
            <!--<div>
            	<div class="import_list b-list01">
                	<dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
            	</div>
            	<div class="import_list b-list02">
                	<dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                </div>
                <div class="import_list b-list03">
                	<dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                </div>
                <div class="import_list b-list04">
                	<dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                </div>
                <div class="import_list b-list05">
                	<dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                </div>
                <div class="import_list b-list06">
                	<dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                </div>
                <div class="import_list b-list07">
                	<dl>
                        <dt>与内容无关：</dt>
                        <dd>
                            <a href="#">T恤</a>
                            <a href="#">休闲裤</a>
                            <a href="#">条纹T</a>
                            <a href="#">牛仔裤</a>
                            <a href="#">针织运动裤</a>
                            <a href="#">潮T</a>
                            <a href="#">格子衬衫</a>
                            <a href="#">村棉印花T恤</a>
                            <a href="#">纯色衬衫</a>
                            <a href="#">牛仔夹克</a>
                            <a href="#">迷彩风</a>
                        </dd>
                    </dl>
                </div>
            </div>-->	
        </div>
        <!--结束-->
        <div class="dao_list">
        	<a href="#">首页</a>
            <a href="#">商家</a>
            <a href="#">优惠活动</a>
            <a href="#">诚邀加盟</a>
        </div>    
    </div>
</div>
<script>
window.onload=function(){
	$(".aside").css({display:"none"})
	$(".important").mouseenter(function(){
		$(".aside").css({display:"block"})
		}).mouseleave(function(){
			$(".aside").css({display:"none"})
			})
	}
</script>
<!--当前位置-->
<div class="now_positionm">
<span>当前位置：</span><a href="#">首页></a><a href="#">个人中心</a>
</div>
<!--centers-->
<div class="centers_m">
	<!--清除浮动-->
    <div class="clear_sm"></div>
	<!--left-->
    <div class="centers_ml">
    	<!--头像-->
        <div class="center_header">
        	<a href="#"><img src="images/66f625e1ecfd7ad8244efabaa744aa73.png"/></a>
            <em>您好，<font>admin</font></em>
        </div>
        <!--列表go-->
        <div class="centers_listm">
        	<div class="centers_listm_one">
            	<img src="images/zshy.png"/>
                <em>会员中心</em>
            </div>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="images/shezhi.png"/>
                <em>资料管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a href="#" class="center_in_self"><font>信息资料</font></a>
                <a href="#" class="center_in_self"><font>银行卡管理</font></a>
            </span>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="images/suo.png"/>
                <em>账户安全</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a href="#" class="center_in_self"><font>账户安全</font></a>
            </span>    
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="images/wdssc.png"/>
                <em>收藏管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
            	<a href="#" class="center_in_self"><font>店铺收藏</font></a>
                <a href="#" class="center_in_self"><font>菜品收藏</font></a>
            </span>
        </div>
        <script type="text/javascript">
		$(function(){//第一步都得写这个
			$(".centers_listm_one_in").click(function(){
			$(this).next(".gjszmdm").slideToggle().siblings("gjszmdm").slideUp()
			});
		})
		</script>
    </div>
    <!--right-->
    <div class="centers_mr">
    <h1 class="welcom_tm">欢迎您，超级会员     <font>admin</font>！您上次登录时间为 2016-10-28 14:23</h1>
    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">资料管理</div>
            <!--照片和内容-->	
            <div class="zp_nrm">
            	<!--left-->
                <div class="zp_nrm_l">
                	<img src="images/66f625e1ecfd7ad8244efabaa744aa73.png"/>
                    <a href="#">更换头像</a>
                </div>
                <!--right-->
                <div class="zp_nrm_r">
                	<p><em>用户名：</em><i>赵大宝</i></p>
                    <p><em>邀请码：</em><i>kfc132456487943321</i><font>(推荐邀请有奖)</font></p>
                    <p><em>邮箱：</em><i>未设置</i><a href="#">立即设置</a></p>
                    <p><em>手机号：</em><i>15554465535</i><a href="#">立即绑定</a></p>
                    <p><em>性别：</em><input type="radio" name="sex" class="sex_m"><i>保密</i><input type="radio" name="sex" class="sex_m"><i>男</i><input type="radio" name="sex" class="sex_m"><i>女</i></p>
                    <span class="borth_m">
                    	<em>生日：</em>
                        <select style=" float:left; height:23px; border:1px solid #eaeaea; margin-top:13px; margin-right:3px">
                        	<option>-年-</option>
                            <option>1994年</option>
                        </select>
                        <select style=" float:left; border:1px solid #eaeaea; margin-top:13px; margin-right:3px">
                        	<option>-月-</option>
                            <option>08月</option>
                        </select>
                        <select style=" float:left; border:1px solid #eaeaea; margin-top:13px; margin-right:3px">
                        	<option>-日-</option>
                            <option>14日</option>
                        </select>
                        <font>(可能有惊喜哦)</font>
                    </span>
                    <p><em>口味偏：</em><input type="radio" name="sexl" class="sex_m"><i>酸</i><input type="radio" name="sexl" class="sex_m"><i>甜</i><input type="radio" name="sexl" class="sex_m"><i>苦</i></p>
                    <a href="#" class="public_m3">保存修改</a>
                </div>
            </div>
        </div>
    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">账户安全</div>
            <div class="public_m4">
            	<p><em>您当前的安全等级：</em><i style="color:#fa3b4a">高</i></p>
            </div>
            <!--各种设置-->    
            <div class="gezhong_szm">
            	<!--一条开始a-->
                <div class="gezhong_szm_in">
                	<b style=" background:url(images/fourm.png) no-repeat 0 0"></b>
                    <span>登录密码<br><em>已设置</em></span>
                    <p>安全性高的密码，可以使账户更安全。建议您定期更换密码。安全性高的密码，可以使账户更安全。建议您定期更换密码。安全性高的密码，可以使账户更安全。建议您定期更换密码。</p>
                    <a href="#">修改密码</a>
                </div>
                <!--一条开始a-->
                <div class="gezhong_szm_in">
                	<b style=" background:url(images/fourm.png) no-repeat 0 -50px"></b>
                    <span>邮箱绑定<br><em>已设置</em></span>
                    <p>进行邮箱验证后，可用于接收敏感操作的身份验证信息，以及订阅更优惠商品的促销邮件。</p>
                    <a href="#">绑定邮箱</a>
                </div>
                <!--一条开始a-->
                <div class="gezhong_szm_in">
                	<b style=" background:url(images/fourm.png) no-repeat 0 -100px"></b>
                    <span>手机绑定<br><em>已设置</em></span>
                    <p>进行手机验证后，可用于接收敏感操作的身份验证信息，以及进行积分消费的验证确认，非常有助于保护您的账号和账户财产安全。</p>
                    <a href="#">修改手机</a>
                </div>
                <!--一条开始a-->
                <div class="gezhong_szm_in">
                	<b style=" background:url(images/fourm.png) no-repeat 0 -150px"></b>
                    <span>支付密码<br><em>已设置</em></span>
                    <p>设置支付密码后，在使用账户中余额时，需输入支付密码。</p>
                    <a href="#">修改密码</a>
                </div>
            </div> 
        </div>
    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">绑定手机</div>
            <!--提示信息-->	
            <div class="tip_notem">
            	<ul>
                	<li>1. 绑定手机后可直接通过短信接受安全验证等重要操作。</li>
                    <li>2. 更改手机时，请通过安全验证后重新输入新手机号码绑定。</li>
                    <li>3. 收到安全验证码后，请在30分钟内完成验证。</li>
                </ul>
            </div>
            <div class="public_m4">
            	<p>
                	<em>绑定手机号码：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                    <input type="button" id="btnsj" class="btn_mfyzm" value="获取验证码" style=" border:1px solid #c8c8c8; margin-left:6px"/>
                </p>
                <p>
                	<em>收到的验证码：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <a href="#" class="public_m3">立即绑定</a>
            </div>
        </div> 
    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">绑定邮箱</div>
            <!--提示信息-->	
            <div class="tip_notem">
            	<ul>
                	<li>1. 此邮箱将接收密码找回，订单通知等敏感性安全服务及提醒使用，请务必填写正确地址。</li>
                    <li>2. 设置提交后，系统将自动发送验证邮件到您绑定的信箱，您需在24小时内登录邮箱并完成验证。</li>
                    <li>3. 更改邮箱时，请通过安全验证后重新输入新邮箱地址绑定。</li>
                </ul>
            </div>
            <div class="public_m4">
            	<p>
                	<em>绑定邮箱地址：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <a href="#" class="public_m3">发送验证邮件</a>
            </div>
        </div>    
    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">登录密码修改</div>
            <!--提示信息-->	
            <div class="tip_notem">
            	<ul>
                	<li>1.请牢记登录密码</li>
                    <li>2.如果丢失密码，可以通过绑定的手机或邮箱找到</li>
                </ul>
            </div>
            <div class="public_m4">
            	<p>
                	<em>原密码：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <p>
                	<em>新的密码：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <p>
                	<em>确认密码：</em>
                    <input type="text" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <a href="#" class="public_m3">确认修改</a>
            </div>
        </div>
    <!--一条开始-->
    	<div class="public_m1">
        	<div class="public_m2">账户余额</div>
            <!--账户余额-->
            <div class="zanghye_m">
            	<em>可用余额：</em><i>￥84.00</i>
                <em>冻结金额：</em><i>￥0.00</i>
                <em>累计赠送：</em><i>￥3.20</i>
            </div>
            <!--充值提现-->
            <div class="chongzhi_htxm">
            	<a href="#">充值</a>
                <a href="#">提现</a>
                <a href="#" class="chakangd_m">查看更多</a>
            </div>
            <!--一个订单信息-->
            <div class="public_m5">
            	<table border="0" cellspacing="0" cellpadding="0">
                	<tbody>
						<tr style=" border-bottom:1px solid #000">       
                        	<th class="olist1">交易类型</th>       
                            <th class="olist2">可用余额（元）</th>       
                            <th class="olist3">变化金额（元）</th>		
                            <th class="olist4">冻结金额（元）</th>		
                            <th class="olist5">交易时间</th>
                            <th class="olist5">操作</th>
                        </tr>	
						<tr>		
						  	<td><a href="#">余额充值</a></td>	 
							<td>￥84.00</td>		
							<td>+1</td>
                            <td class="money">0</td>		
							<td>2016/06/06 20:30</td>
                            <td><a href="#" style=" margin-right:6px">查看</a><a href="#">删除</a></td>
                        </tr>
					</tbody>
                </table>
            </div>
            <!--翻页符号-->
            <div class="fanyefh_m">
            	<a href="#">上一页</a>
                <a href="#"class="addclass_m">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">下一页</a>
            </div>
        </div>    
                                                   
    </div>
</div>
<!--页脚-->
<div class="ye_foot">
	
    <hr style=" width:1200px; height:1px; background:#8b8b8b;color:#8b8b8b; display:block; margin:0 auto"/>
    <p class="wahaha">CopyRight 2010 订餐在线 www.czzkeji.com 鲁ICP备6842156792号 </p>
</div>
</body>
</html>    
            
