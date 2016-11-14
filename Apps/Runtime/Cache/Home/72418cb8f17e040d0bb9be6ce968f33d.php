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
		<a href="./" title="首页">联想手机社区</a>
		<em>&raquo;</em><a href="<?php echo U('Home/Section/index');?>">版块</a>
	</div>

	<div class="content" id="forumlist">

		<div class="oneway_text box">
			今日新帖<em>2657</em><span class="pipe">|</span>
			昨日贴数<em>11665</em><span class="pipe">|</span>
			总帖数<em>3951804</em><span class="pipe">|</span>
			会员总数<em>299250</em>
		</div>
		<div class="big_forumlist">
			<div class="mainforum box">
				<div class="mainforumicon">
					<a href="/z1/">
						<img src="/Public/qwhome/picture/z1.png" height="90" width="150" alt="ZU1 Z1手机论坛"></a>
				</div>
				<div class="mainforumcontent">
					<h2><a href="/z1/">ZUK Z1手机</a></h2>
					<p>ZUK首款智能手机ZUK Z1用户交流区</p>
					<p class="mainforumcontentinfo">今日: <font class="bluecolor">224</font><span class="pipe">|</span>主题: 48942</p>
				</div>
			</div>
			<div class="mainforum box">
				<div class="mainforumicon">
					<a href="/z2/"><img src="/Public/qwhome/picture/z2.png" height="90" width="150" alt="联想ZUK Z2"></a>
				</div>
				<div class="mainforumcontent">
					<h2><a href="/z2/">联想ZUK Z2</a></h2>
					<p>ZUK Z2智能手机用户交流区</p>
					<p class="mainforumcontentinfo">今日: <font class="bluecolor">508</font>
					<span class="pipe">|</span>主题: 40371</p>
				</div>
			</div>
			<div class="mainforum mainforum_big box">
				<div class="mainforumicon">
					<a href="/zui/"><img src="/Public/qwhome/picture/zui.png" height="90" width="150" alt="ZUI论坛"></a>
				</div>
				<div class="mainforumcontent">
					<h2><a href="/zui/">ZUI社区</a></h2>
					<p>简单，最好看 — ZUI官方用户交流区</p>
					<p class="mainforumcontentinfo">今日: <font class="bluecolor">26</font><span class="pipe">|</span>主题: 13964</p>
				</div>
			</div>
		</div>
		<div class="box">
			<h3 class="modname">Moto专区</h3>
			<div class="forumlist"><div class="mainforum">
				<div class="mainforumicon">
					<a href="/motox/">
						<img src="/Public/qwhome/picture/common_78_icon.jpg" align="left" alt="" />
					</a>
				</div>
				<div class="mainforumcontent">
					<h2><a href="/motox/">Moto X系列</a></h2>
					<p>Moto X系列手机综合板块</p>
					<p>今日：<font class="bluecolor">4</font>
						<span class="pipe">|</span>主题: 609</p>
				</div>
				</div>
				<div class="mainforum">
					<div class="mainforumicon">
						<a href="/moto360/">
							<img src="/Public/qwhome/picture/common_79_icon.png" align="left" alt="" />
						</a>
					</div>
					<div class="mainforumcontent">
						<h2><a href="/moto360/">Moto 360</a></h2>
						<p>功能强大 倾心之选</p>
						<p>今日：<font class="bluecolor">0</font><span class="pipe">|</span>主题: 218</p>
					</div>
				</div>
				<div class="mainforum">
					<div class="mainforumicon">
						<a href="/motoz/">
							<img src="/Public/qwhome/picture/common_88_icon.jpg" align="left" alt="" />
						</a>
					</div>
					<div class="mainforumcontent">
						<h2><a href="/motoz/">Moto Z系列</a></h2>
						<p>Moto Z 定义模块化手机</p>
						<p>今日：<font class="bluecolor">40</font>
							<span class="pipe">|</span>主题: 1111</p>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<h3 class="modname">粉丝广场</h3>
			<div class="forumlist">
				<div class="mainforum">
					<div class="mainforumicon">
						<a href="/chat/">
							<img src="/Public/qwhome/picture/common_45_icon.png" align="left" alt="" />
						</a>
					</div>
					<div class="mainforumcontent">
						<h2><a href="/chat/">联想畅谈</a></h2>
						<p>在这里谈天说地，广交好友</p>
						<p>今日：<font class="bluecolor">1548</font>
							<span class="pipe">|</span>主题: <span title="188986">18万</span>
						</p>
					</div>
				</div>
				<div class="mainforum">
					<div class="mainforumicon">
						<a href="/zhuti/">
							<img src="/Public/qwhome/picture/common_86_icon.png" align="left" alt="" />
						</a>
					</div>
					<div class="mainforumcontent">
						<h2><a href="/zhuti/">主题苑</a></h2>
						<p>联想手机主题的美,我们要从里到外</p>
						<p>今日：<font class="bluecolor">82</font><span class="pipe">|</span>主题: 1019</p>
					</div>
				</div>
				<div class="mainforum">
					<div class="mainforumicon">
						<a href="/camera/">
							<img src="/Public/qwhome/picture/common_39_icon.png" align="left" alt="" />
						</a>
					</div>
					<div class="mainforumcontent">
						<h2><a href="/camera/">趣摄阁</a></h2>
						<p>趣摄他人不曾见过的风景。</p>
						<p>今日：<font class="bluecolor">190</font>
							<span class="pipe">|</span>主题: <span title="10584">1万</span>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<h3 class="modname">站务大厅</h3>
			<div class="forumlist">
				<div class="mainforum">
					<div class="mainforumicon">
						<a href="/gonggao/">
							<img src="/Public/qwhome/picture/common_42_icon.png" align="left" alt="" />
						</a>
					</div>
					<div class="mainforumcontent">
						<h2><a href="/gonggao/">申请公告</a></h2>
						<p>用户组|精华帖|勋章申请</p>
						<p>今日：<font class="bluecolor">0</font><span class="pipe">|</span>主题: 36</p>
					</div>
				</div>
				<div class="mainforum">
					<div class="mainforumicon">
						<a href="/huodong/">
							<img src="/Public/qwhome/picture/common_41_icon.png" align="left" alt="" />
						</a>
					</div>
					<div class="mainforumcontent">
						<h2><a href="/huodong/">活动中心</a></h2>
						<p>社区最新最快活动信息</p>
						<p>今日：<font class="bluecolor">19</font><span class="pipe">|</span>主题: 591</p>
					</div>
				</div>
				<div class="mainforum">
					<div class="mainforumicon">
						<a href="/zhanwu/">
							<img src="/Public/qwhome/picture/common_43_icon.png" align="left" alt="" />
						</a>
					</div>
					<div class="mainforumcontent">
						<h2><a href="/zhanwu/">建议申诉</a></h2>
						<p>主要负责解封、投诉等事务</p>
						<p>今日：<font class="bluecolor">11</font><span class="pipe">|</span>主题: 779</p>
					</div>
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



</html>