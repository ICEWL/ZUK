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

	
<div class="pai_top_pic">
<div class="pai_top_piclist">
<ul>
<li><a href="" style="background:url(/Public/qwhome/images/pai_big.jpg) no-repeat center top;"></a></li>
</ul>
</div>
</div>


<div class="pai_top_menu box">
<div class="content">
<div class="pic_top_avatar box">
<a href=""  class="museravatar inlineblock"><img src="/Public/qwhome/picture/00_avatar_middle.jpg" /></a>
</div>
<div class="pic_top_userinfo">
<p>游客</p>
<p></p>
</div>
<div class="pic_top_up">
<a href="" target="_blank" class="whitesmallbutton">上传趣摄作品</a>
</div>
<div class="pic_top_nav">
<ul>
<li ><a href="pai.php"  class="bluecolor">全部<span></span></a></li>
<li><a href="" >男神女神<span></span></a></li>
<li><a href="" >生活百态<span></span></a></li>
<li><a href="" >旅途风景<span></span></a></li>
<li><a href="" >植物花卉<span></span></a></li>
<li><a href="" >动物萌宠<span></span></a></li>

<li><select  onchange="window.location='pai.php?typeid=0&orderby='+this.value;"><option value="dateline"  selected>默认排序</option>
<option value="heats" >最热</option>
<option value="digest" >精华</option>
</select></li>
</ul>
</div>
</div>
</div>

<div class="content">
<div class="pic_content_recommend clear _paislide">
<div class="pic_content_recommend_title">
<ul class="_paislidetit">
<li class="current">趣摄故事</li>
<li class="">趣摄正使</li>
</ul>
</div>
<div class="_paislidelist">
<div class="pic_content_recommend_list">
<ul>
	<li>
		<a href="">
			<img src="/Public/qwhome/picture/forum.php" width="260" height="170">
			<div><p>毕业·记（九）亭亭玉立</p></div>
		</a>
	</li>

</ul>
</div>

<div class="pic_content_recommend_kol" style="display: none;">
<ul>
	<li>
		<a href="">
			<img src="picture/pai_1.jpg" width="260" height="170">
			<div><p>
				<img src="/Public/qwhome/picture/54_avatar_small.jpg" onerror="this.onerror=null;this.src='/Public/qwhome/images/noavatar_small.gif'" />
			</p>
			<p class="/Public/qwhome/pic_content_recommend_kolname">小梨在路上</p>
			<p>神器：Z2 Pro<font class="pipe">/</font> 技能：逆光拍摄</p>
		</div>
	</a></li>


</ul>
</div>
</div>
</div>

<div class="pic_content_recommend clear pic_content_recommend_big">
<div class="pic_content_recommend_title">
<ul>
<li>趣摄 | 他人 | 不曾 | 见过的风景</li>
</ul>
</div>
<div>
<div class="pic_content_recommend_list pailist">
<ul>
	<li>
		<a href="javascript:;" onclick="paiview('338055')">
			<img src="/Public/qwhome/picture/forum.php" width="260" height="170">
			<div><p>街景随拍</p></div>
		</a>
	</li>

</ul>
</div>
<div id="pic_more" style="clear: both;"></div>
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