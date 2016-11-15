<?php if (!defined('THINK_PATH')) exit();?>﻿<script src="/Public/qwhome/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="/Public/qwhome/js/awardRotate.js" type="text/javascript"></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>zuk手机社区</title>
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/style_2_common.css" />
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/style.css">
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/exchange.css">
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/nanoscroller.css">
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/style_2_forum_index.css">
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/no_login.css">
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/style_2_forum_curmodule.css">
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/pai.css">
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/style_8_common.css" /> 
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/style_8_forum_forumdisplay.css" /> 


<script type="text/javascript">
	var discuz_uid = '0', 
		GroupChangeis = 0,
		TodayBirthdayis = 0,
		NewUserWelcomeis = 0,
		UserBackWelcomeis = 0,
		TidParty = 13,
		LOCALWEB = 0;
</script>

<script src="/Public/qwhome/js/common.js" type="text/javascript"></script>
<script src="/Public/qwhome/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script>jQuery.noConflict();</script>
<script src="/Public/qwhome/js/jquery.forum.js" type="text/javascript"></script>


</head>

<body>
<!-- _______________________________________________________ -->
<!-- 头部head -->

<div class="fm_header">
	<div class="content">
		<div class="fm_logo"><a href="<?php echo U('Home/Index/index');?>">联想手机社区</a></div>
		<div class="fm_nav">
			<ul>
				<li  class="current"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
				<li ><a href="<?php echo U('Home/Section/index');?>">版块</a></li>
				<li ><a href="<?php echo U('Home/Exchange/index');?>">兑金堂</a></li>
				<li><a href="<?php echo U('Home/Pic/index');?>" >趣摄</a></li>
				<li ><a href="<?php echo U('Home/Turntable/index');?>">转盘</a></li>
			</ul>
		</div>
		<div class="fm_userinfo fm_noinfo">

			<script type="text/javascript" src="/Public/qwhome/js/bufflist.js"></script>

			<a href="<?php echo U('Home/Login/index');?>"  class="ppdiag">登录</a>
			<span class="pipe">|</span>
			<a href="<?php echo U('Home/Reg/index');?>">注册</a>
		</div>
		<div class="fm_search">
			<form id="scbar_form" method="post"  onsubmit="#" action="#" target="_blank">
			
				<div class="forum_search">
					<ul>
						<li class="scbarbutton">
							<button type="submit">搜索</button>
						</li>
						<li class="scbartype">
							<a href="#" >帖子</a>
						</li>
						<li class="scbarbox">
							<input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" />
						</li>
					</ul>
				</div>
			</form>	
			<script type="text/javascript">
			initSearchmenu('scbar', '');
			</script>
		</div>
	</div>
</div>
<!-- 头部结束 -->
<!-- _______________________________________________________ -->


	<div class="breadcrumbs content">
		<a href="">ZUK社区</a><em>&raquo;</em><a href="">兑金堂</a>
	</div>
	<div class="content">
		<div class="exchange_threelist">
			<ul>
				<li>
					<a href=" " target="_blank">
						<i class="coin_i"></i><span>金币攻略</span>秘籍在此，助你成壕 
					</a>
				</li>
				<li>
					<a href=" " target="_blank">
						<i class="rule_i"></i><span>兑换规则</span>第一次兑换？进来看看
					</a>
				</li>
				<li>
					<a href=" " target="_blank">
						<i class="line_i"></i><span>兑换流程</span>兑换很方便，操作很简单
					</a>
				</li>
			</ul>
		</div>
		<div class="exchange_shop">
			<div class="exchange_title">
				<div class="ex_choices">
					<select name="select" onchange="window.location=this.options[this.selectedIndex].value">
						<option value=" " >按价格筛选</option>
						<option value=" " selected>全部商品</option>
						<option value=" " >1~2000金币</option>
						<option value=" " >2001~4999金币</option>
						<option value=" " >5000金币以上</option>
					</select>
				</div>
				<ul>
					<li class="on"><a href="/shop.php">全部</a></li>
					<li ><a href=" ">礼品</a></li>
					<li ><a href=" ">硬货</a></li>
					<li><a href=" ">兑换码</a></li>
					<li><a href=" ">兑换记录</a></li>
				</ul>
			</div>
			<div class="exchange_core">

					<!-- 物品 -->
				<div class="exchange_core_pan js_core_pan" >
					<div class="ex_img">
						<div class="ex_imgicon"><i class="icon_huodong"></i></div>
						<img src="/Public/qwhome/picture/150633ua7611f1zrc7c1ig.jpg" alt="">
					</div>
					<div class="ex_title">红木定制移动电源</div>
					<div class="ex_price">
						<span class="underlinetxt">8800</span>
						<span class="orangecolor"><strong>5900</strong></span>金币
					</div>
					<div class="ex_action">
						<a href="javascript:;" onclick="getitem('105')" class="blankgraybtn">兑换</a>
					</div>
					<div class="ex_express js_ex_express">红木定制移动电源，5000mAh，输出5V 1A</div>
				</div>
					<!-- 物品 -->


			</div>
		</div>
	</div>



</div>
<!-- _______________________________________________________ -->

<!-- 友情链接块 -->
<div class="footer_links">
	<div class="content clear">
		<div class="links_list">
			<ul>
				<li><a href="http://www.igao7.com/" target="_blank" title="爱搞机">爱搞机</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- _______________________________________________________ -->


<div class="fm_footer">
	<!-- <div class="fm_line"></div> -->
	<div id="ft" class="content">
		<div class="right font12 color3">
		Copyright © 2015 ZUK.CN / 京ICP备15007699号-1
		</div>
		<a href="#" target="_blank">联想手机商城</a>
		<span class="pipe">|</span>
		<a href="#" target="_blank">合作申请</a>
	</div>
</div>

<!-- _______________________________________________________ -->
<!-- 返回顶部 -->
<div id="scrolltop" class="js_scrolltop">
<a title="返回顶部"  class="scrolltopa"><s class="scrolltopb"><img src="/Public/qwhome/picture/scrolltop_2.png" alt=""></s><b>返回顶部</b></a>
</div>
<!-- _______________________________________________________ -->




 

<!-- _______________________________________________________ -->

<!-- 广告推荐 -->
<!-- <div class="fullbg" style="background-image:url(/Public/qwhome/images/235646yp35xycweuyxuanc.jpg)"></div>
 --><div class="fullbg_link">
	<a href="#" title="1" style="position: absolute; left:0; top:60px; height:300px; width:100px;display:block;"></a>
	<a href="#" title="1" style="position: absolute; right:0; top:60px; height:300px; width:100px;display:block;"></a>
</div>
<!-- _______________________________________________________ -->

<!-- 没登陆提示 -->
 
<link rel="stylesheet" type="text/css" href="/Public/qwhome/css/no_login.css" />
<div class="user_no_login" id="_js_nologin">
	<span class="font22">现在加入zuk手机社区，<a href="#">注册一个账号</a>或</span>
	<span class="use_id use_zukid"><a href="#">zuk账号登陆</a></span>
	<span class="use_id use_qqid"><a href="#">QQ账号登陆</a></span>
	<span class="use_id use_wbid"><a href="#">微博账号登陆</a></span>
	<span class="use_id use_wbid"><a href="#">待定账号登陆</a></span>
</div>


</body>

	<script>
		formhash='f484f232';
		jQuery(function($){
		showshoptip();

		});
		function showshoptip(){
		var $=jQuery;
		var objtitle=$(".js_core_pan");
		        var x=15;
		        var y=10;
		        objtitle.mouseover(function(e){
		            $(this).find(".js_ex_express")
		                .css({
		                    "top":(e.pageY+y)+"px",
		                    "left":(e.pageX+x)+"px"
		                }).show(0);
		        }).mouseout(function(e){
		            $(this).find(".js_ex_express").hide(0);
		        }).mousemove(function(e){
		           $(this).find(".js_ex_express")
		                .css({
		                    "top":(e.pageY+y)+"px",
		                    "left":(e.pageX+x)+"px"
		                }); 
		        });
		}
		function getitem(itemid){
		var $=jQuery;
		var wh=$(window).innerHeight()>$('body,htm').innerHeight() ? $(window).innerHeight():$('body,html').innerHeight();
		var strex='<div id="_exmask" style="position: fixed; z-index: 12; top: 0px; left: 0px; width: 100%; height:'+wh+'px; opacity: 0.5; background-color: rgb(0, 0, 0);"></div>';
		$.getJSON('shop.php?mod=item&itemid='+itemid+'&formhash='+formhash, function(response){

		$("#append_parent").append(strex+response.content);
		mask_atmid(".ex_popwrap");
		});
		}

</script>

</html>