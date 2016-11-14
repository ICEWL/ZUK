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

<link rel="stylesheet" type="text/css" href="/Public/timothy/css/style_8_common.css" /> 
<link rel="stylesheet" type="text/css" href="/Public/timothy/css/style_8_forum_forumdisplay.css" /> 
<link rel="stylesheet" type="text/css" href="/Public/timothy/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/timothy/css/lightbox.css" />

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
				<li><a href="<?php echo U('Home/Pic/index');?>" >相册</a></li>
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

<script src="/Public/qwhome/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="/Public/qwhome/js/awardRotate.js" type="text/javascript"></script>
	<style type="text/css">

.cj_main{ background:#fff4db url(/Public/qwhome/images/bg.jpg) no-repeat; }
.cj_zpbg{ height:744px; }

.banner{display:block;width:629px;margin-left:auto;margin-right:auto;margin-top: 270px;}
.banner .turnplate{display:block;width:100%;position:relative;}
.banner .turnplate canvas.item{width:100%;}
.banner .turnplate img.pointer{position:absolute;width:31.5%;height:42.5%;left:34.6%;top:23%;}
.js_scrolltop{right: 5%;}

</style>
<div class="breadcrumbs content">
<a href="./" title="首页">联想手机社区</a><em>&raquo;</em>幸运大转盘
</div>




<div class="content" id="cj">
<div class="main box cj_main">
<div class="cj_zpbg">
<div class="cj_zp">
<!--  -->
 <img src="/Public/qwhome/images/1.png" id="shan-img" style="display:none;" />
    <img src="/Public/qwhome/images/2.png" id="sorry-img" style="display:none;" />
	<div class="banner">
		<div class="turnplate" style="background-image:url(/Public/qwhome/images/turnplate-bg.png);background-size:100% 100%;">
			<canvas class="item" id="wheelcanvas" width="422px" height="422px"></canvas>
			<img class="pointer" src="/Public/qwhome/images/turnplate-pointer.png"/>
		</div>
	</div>
</div>
</div>
<div class="cj_gzlist">
<div class="cj_gztitle">
<h3>转盘抽奖规则</h3>
<div class="cj_gzline"></div>
</div>
<div class="cj_gz">
 <p><span style="font-family: 宋体, SimSun; font-size: 14px;">1、抽奖有效时间：<span style="color: rgb(192, 0, 0); font-family: 宋体, SimSun;">即刻起至2016年11月11日24:00</span></span></p><p><span style="font-family: 宋体, SimSun; font-size: 14px;">2、每次抽奖将消耗<span style="color: rgb(192, 0, 0); font-family: 宋体, SimSun; font-size: 14px;">5</span>个金币，每位粉粉每天有<span style="color: rgb(192, 0, 0); font-family: 宋体, SimSun; font-size: 12px;">3</span>次机会抽奖</span></p><p><span style="font-family: 宋体, SimSun; font-size: 14px;">3、所有实物奖励在抽奖结束后<span style="color: rgb(192, 0, 0); font-family: 宋体, SimSun; font-size: 12px;">3-7</span>个工作日内陆续发布，发货默认粉粉在社区资<span style="font-family: 宋体, SimSun; font-size: 12px;">料中自行补充的<span style="font-size: 14px; color: rgb(192, 0, 0); font-family: 宋体, SimSun;">收货地址</span>。填写步骤为<span style="font-size: 14px; color: rgb(192, 0, 0); font-family: 宋体, SimSun;">修改资料—收货地址（需全部填写</span></span><span style="color: rgb(192, 0, 0); font-family: 宋体, SimSun; font-size: 12px;">）</span></span></p><p><span style="font-family: 宋体, SimSun; font-size: 14px;">4、收货地址仅社区管理员可见，为不影响您正常收货，请务必填写真实资料</span></p><p><span style="font-family: 宋体, SimSun; font-size: 14px;">5、优惠券会自动发放到您<a style="color: rgb(0, 176, 80); text-decoration: underline;" href="http://www.lenovomobile.com" target="_self"><span style="color: rgb(0, 176, 80); font-family: 宋体, SimSun; font-size: 12px;">联想手机官方商城</span></a>的ID上，请注意查收（如无特殊情况，不会超过48小时）</span></p><p><span style="font-family: 宋体, SimSun; font-size: 14px;">6、实物奖品如在活动结束3个工作日内（含3个）仍未填写地址者，默认放弃获奖资格；</span></p><p><span style="font-family: 宋体, SimSun; font-size: 12px;">7、优惠券在超级狂欢节活动期间可在联想手机商城全场通用<a></a><a></a><a style="font-family: 宋体, SimSun; font-size: 14px; text-decoration: underline;" href="http://www.lenovomobile.com/zt/1111.html" target="_self"></a><a></a><a></a><span style="font-family: 宋体, SimSun; font-size: 14px;"><a></a><a></a><a href="http://www.lenovomobile.com/zt/1111.html">http://www.lenovomobile.com/zt/1111.html</a>（悄悄告诉你，配件更划算哦）</span></span></p><p><span style="font-family: 宋体, SimSun; font-size: 14px;">8、如发现使用任何不正当手段获取奖品，一律取消获奖资格不予通知，严重者保留刑法追究责任</span></p><p><span style="font-family: 宋体, SimSun; font-size: 14px;">9、本活动最终解释权归联想手机社区所有</span></p><p><span style="font-family: 宋体, SimSun; font-size: 12px;"><br/></span></p><p><span style="color: rgb(0, 176, 240); font-family: 宋体, SimSun; font-size: 14px;">其余福利温馨提示：</span></p><p><span style="color: rgb(0, 176, 240); font-family: 宋体, SimSun; font-size: 14px;">1、商城双11超级狂欢节 </span><a style="font-family: 宋体, SimSun; font-size: 14px; text-decoration: underline;" href="http://www.lenovomobile.com/zt/1111.html" target="_self"><span style="font-family: 宋体, SimSun; font-size: 14px;">http://www.lenovomobile.com/zt/1111.html</span></a></p><p><span style="color: rgb(0, 176, 240); font-family: 宋体, SimSun; font-size: 14px;">2、社区晒单礼赢豪&nbsp;</span><a style="font-family: 宋体, SimSun; font-size: 14px; text-decoration: underline;" href="http://bbs.lenovomobile.cn/huodong/t272964/" _src="http://bbs.lenovomobile.cn/huodong/t272964/"><span style="font-family: 宋体, SimSun; font-size: 14px;">http://bbs.lenovomobile.cn/huodong/t272964/</span></a></p><p><span style="color: rgb(0, 176, 240); font-family: 宋体, SimSun; font-size: 14px;"></span></p></div>
</div>
</div>

<div class="sidebar">

<div class="box forum_user_stat">
<div class="grid_stat myinfo_stat">
<div class="grid_list">
<ul>
<li><a href="home.php?mod=spacecp&amp;ac=credit" target="_blank"><span class="grid_list_num"></span>我的金币</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=awards" target="_blank"><em><span class="grid_list_num recordnum">0</span>中奖纪录</em></a></li>
<li><em><span class="grid_list_num recordnum_todayre">3</span>今日剩次数</em></li>
</ul>
</div>
</div>
</div>

<div class="box">
<h3 class="modname"><span class="more">看看谁的运气最好</span>中奖名单</h3>
<div class="s_links" style="height: 600px; overflow: hidden;">
<ul>

<li><a href="space.php?uid=239884" target="_blank"><em>双11超级狂欢20元优惠券</em><span>ZUK496655</span></a></li>

</ul>
</div>
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
<div class="fullbg" style="background-image:url(/Public/qwhome/images/235646yp35xycweuyxuanc.jpg)"></div>
<div class="fullbg_link">
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


<script type="text/javascript">
var turnplate={
		restaraunts:[],				//大转盘奖品名称
		colors:[],					//大转盘奖品区块对应背景颜色
		outsideRadius:192,			//大转盘外圆的半径
		textRadius:155,				//大转盘奖品位置距离圆心的距离
		insideRadius:68,			//大转盘内圆的半径
		startAngle:0,				//开始角度
		
		bRotate:false				//false:停止;ture:旋转
};

$(document).ready(function(){
	//动态添加大转盘的奖品与奖品区域背景颜色
	turnplate.restaraunts = ["5000M免费流量包", "10闪币", "谢谢参与", "20坨", "10M免费流量包", "20M免费流量包", "20坨 ", "30M免费流量包", "100M免费流量包", "20坨"];
	turnplate.colors = ["#FFF4D6", "#FFFFFF", "#FFF4D6", "#FFFFFF","#FFF4D6", "#FFFFFF", "#FFF4D6", "#FFFFFF","#FFF4D6", "#FFFFFF"];

	
	var rotateTimeOut = function (){
		$('#wheelcanvas').rotate({
			angle:0,
			animateTo:2160,
			duration:8000,
			callback:function (){
				alert('网络超时，请检查您的网络设置！');
			}
		});
	};

	//旋转转盘 item:奖品位置; txt：提示语;
	var rotateFn = function (item, txt){
		var angles = item * (360 / turnplate.restaraunts.length) - (360 / (turnplate.restaraunts.length*2));
		if(angles<270){
			angles = 270 - angles; 
		}else{
			angles = 360 - angles + 270;
		}
		$('#wheelcanvas').stopRotate();
		$('#wheelcanvas').rotate({
			angle:0,
			animateTo:angles+1800,
			duration:8000,
			callback:function (){
				//随机奖品
				// alert(txt);
				turnplate.bRotate = !turnplate.bRotate;
				console.log(txt);
			}
		});
	};


	$('.pointer').click(function (){
		if(turnplate.bRotate)return;
		turnplate.bRotate = !turnplate.bRotate;
		//获取随机数(奖品个数范围内)
		var item = rnd(1,turnplate.restaraunts.length);
		//奖品数量等于10,指针落在对应奖品区域的中心角度[252, 216, 180, 144, 108, 72, 36, 360, 324, 288]
		rotateFn(item, turnplate.restaraunts[item-1]);
		
		console.log(item);
	});
});

function rnd(n, m){
	var random = Math.floor(Math.random()*(m-n+1)+n);
	return random;
	
}


//页面所有元素加载完毕后执行drawRouletteWheel()方法对转盘进行渲染
window.onload=function(){
	drawRouletteWheel();
};

function drawRouletteWheel() {    
  var canvas = document.getElementById("wheelcanvas");    
  if (canvas.getContext) {
	  //根据奖品个数计算圆周角度
	  var arc = Math.PI / (turnplate.restaraunts.length/2);
	  var ctx = canvas.getContext("2d");
	  //在给定矩形内清空一个矩形
	  ctx.clearRect(0,0,422,422);
	  //strokeStyle 属性设置或返回用于笔触的颜色、渐变或模式  
	  ctx.strokeStyle = "#FFBE04";
	  //font 属性设置或返回画布上文本内容的当前字体属性
	  ctx.font = '16px Microsoft YaHei';      
	  for(var i = 0; i < turnplate.restaraunts.length; i++) {       
		  var angle = turnplate.startAngle + i * arc;
		  ctx.fillStyle = turnplate.colors[i];
		  ctx.beginPath();
		  //arc(x,y,r,起始角,结束角,绘制方向) 方法创建弧/曲线（用于创建圆或部分圆）    
		  ctx.arc(211, 211, turnplate.outsideRadius, angle, angle + arc, false);    
		  ctx.arc(211, 211, turnplate.insideRadius, angle + arc, angle, true);
		  ctx.stroke();  
		  ctx.fill();
		  //锁画布(为了保存之前的画布状态)
		  ctx.save();   
		  
		  //----绘制奖品开始----
		  ctx.fillStyle = "#E5302F";
		  var text = turnplate.restaraunts[i];
		  var line_height = 17;
		  //translate方法重新映射画布上的 (0,0) 位置
		  ctx.translate(211 + Math.cos(angle + arc / 2) * turnplate.textRadius, 211 + Math.sin(angle + arc / 2) * turnplate.textRadius);
		  
		  //rotate方法旋转当前的绘图
		  ctx.rotate(angle + arc / 2 + Math.PI / 2);
		  
		  /** 下面代码根据奖品类型、奖品名称长度渲染不同效果，如字体、颜色、图片效果。(具体根据实际情况改变) **/
		  if(text.indexOf("M")>0){//流量包
			  var texts = text.split("M");
			  for(var j = 0; j<texts.length; j++){
				  ctx.font = j == 0?'bold 20px Microsoft YaHei':'16px Microsoft YaHei';
				  if(j == 0){
					  ctx.fillText(texts[j]+"M", -ctx.measureText(texts[j]+"M").width / 2, j * line_height);
				  }else{
					  ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
				  }
			  }
		  }else if(text.indexOf("M") == -1 && text.length>6){//奖品名称长度超过一定范围 
			  text = text.substring(0,6)+"||"+text.substring(6);
			  var texts = text.split("||");
			  for(var j = 0; j<texts.length; j++){
				  ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
			  }
		  }else{
			  //在画布上绘制填色的文本。文本的默认颜色是黑色
			  //measureText()方法返回包含一个对象，该对象包含以像素计的指定字体宽度
			  ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
		  }
		  
		  //添加对应图标
		  if(text.indexOf("闪币")>0){
			  var img= document.getElementById("shan-img");
			  img.onload=function(){  
				  ctx.drawImage(img,-15,10);      
			  }; 
			  ctx.drawImage(img,-15,10);  
		  }else if(text.indexOf("谢谢参与")>=0){
			  var img= document.getElementById("sorry-img");
			  img.onload=function(){  
				  ctx.drawImage(img,-15,10);      
			  };  
			  ctx.drawImage(img,-15,10);  
		  }
		  //把当前画布返回（调整）到上一个save()状态之前 
		  ctx.restore();
		  //----绘制奖品结束----
	  }     
  } 
}

</script>

</html>