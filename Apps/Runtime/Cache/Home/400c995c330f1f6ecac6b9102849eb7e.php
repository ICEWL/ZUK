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


<div id="wp" class="wp">
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

    <script type="text/javascript">
q_jq(function() {
  q_jq("div.q_holder").jPages({
containerID: "qing_indexpage",
previous: "",
next: "",
perPage: 10  //设置首页左侧列表每页显示数量
  });
  q_jq("#jp-qnav").click(function(){
  q_jq('html,body').animate({scrollTop:400},0);
  return false;
  });
});
</script>
<div class="wp ct2 qing_portal0 cl" style="margin:20px auto;">
<div class="mn">


    	<!--首页左侧顶部焦点图 start 179667784-->
        <!--[diy=q_indexdiyfocus]-->
<!--         <div id="q_indexdiyfocus" class="area">
        	<div id="frame2XovfW" class="cl_frame_bm frame move-span cl frame-1">
        		<div id="frame2XovfW_left" class="column frame-1-c">
        			<div id="frame2XovfW_left_temp" class="move-span temp"></div>
        			<div id="portal_block_7" class="cl_block_bm block move-span">
        				<div id="portal_block_7_content" class="dxb_bc">
        					<div class="qing_index_focus cl">
            <div class="q_topltslide">
                <ul class="rpic">
                	<li>
                		<a href="" target="_blank">
                			<img src="/Public/qwhome/picture/5847e210767638e2ffa95b5c10cd8d47.jpg" width="710" height="310" />
                		</a>
                	</li>
                	<li>
                		<a href="" target="_blank">
                			<img src="/Public/qwhome/picture/32cfdc9a7fec0a8ab02efd44cc1f8197.jpg" width="710" height="310" />
                		</a>
                	</li>
                	<li>
                		<a href="" target="_blank">
                			<img src="/Public/qwhome/picture/a751df34c681d88d5e7f7245c6b74bfb.jpg" width="710" height="310" />
                		</a>
                	</li>
                </ul>
                <div class="txt-bg"></div>
                <div class="rtxt">
                    <ul>
                    	<li>
                    		<a href="" target="_blank">
                    			Trick or treat！不给糖就捣蛋，万圣节拼图发糖果咯！</a>
                    	</li>

                    	<li>
                    		<a href="" target="_blank">【福利来啦！】这个深秋，我要不劳而获！</a>
                    	</li>

                    	<li>
                    		<a href="" target="_blank">他从创始人转型做投资，提出了找合伙人的5大准则</a>
                    	</li>
                    </ul>
                </div>
                <ul class="rnum">
                	<li><a href="javascript:;"></a></li>

                	<li><a href="javascript:;"></a></li>

                	<li><a href="javascript:;"></a></li>
	            </ul>
            </div>
        </div></div></div></div></div></div> --><!--[/diy]-->
        <!--首页左侧顶部焦点图 end 179667784-->
        
        <!--首页左侧列表 start 179667784-->
        <div class="qing_index_leftlist bm cl">
            <div id="q_indexdiyleftlist" class="area">
            	<div id="framevNqG1g" class="cl_frame_bm frame move-span cl frame-1">
            		<div id="framevNqG1g_left" class="column frame-1-c">
            			<div id="framevNqG1g_left_temp" class="move-span temp"></div>
            			<div id="portal_block_8" class="cl_block_bm block move-span">
            				<div id="portal_block_8_content" class="dxb_bc">
            					<ul id="qing_indexpage">
									<li>
      									<a href="" class="recommend_article_list_pic" target="_blank">
      										<img src="/Public/qwhome/picture/4d8cf730fda2be6db7d8e9a6f2577280.jpg" width="190" height="130" />
      									</a>
							       					<div class="recommend_article_list_content">
   
							            	<h2><a href="forum.php?mod=viewthread&tid=18" target="_blank">一个喜欢自拍的妹子的相册 不喜勿进 ></a></h2>
							            <div class="recommend_article_list_simple">
											首先声明楼主几乎都是用手机自拍  从不p 当然色调除外  楼主也很少化妆的 一般只画眉  如果有看客不喜欢可以右上角红叉  那些眼
										</div>
							            <div class="recommend_article_list_info">
							            	<a href="" class="icon16link" target="_blank"><i class="s_view"></i>153</a>
							           		 <a href="" class="colorlink" target="_blank">小兔子</a><span class="pipe">|</span>
							            	<a href="" class="mr10" target="_blank">我爱自拍</a>2015-10-28
							            </div>
							        	</div>
							   </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div id="jp-qnav" class="q_holder"></div>
        <!--首页左侧列表 end 179667784-->
    </div>
    <div class="sd">
    	<!--签到 start 179667784-->
    	
<style type="text/css">
.midaben_con {
font-family:arial,"Hiragino Sans GB","Microsoft Yahei",sans-serif;
background-color:#fff;
width:270px;
height:50px;
border-radius:5px;
position:relative
}
.midaben_con .midaben_signpanel {
background-color:#ff6f3d;
height:50px;
display:block;
position:relative;
border-radius:4px;
background-image:url(/Public/qwhome/images/tou.png);
background-repeat:no-repeat;
background-position:14px 8px;
cursor:pointer
}
.midaben_con .midaben_signpanel .font {
position:absolute;
color:#fff;
width:55px;
height:30px;
font-size:24px;
line-height:30px;
top:11px;
left:50px
}
.midaben_con .midaben_signpanel .nums {
display:none
}
.midaben_con .midaben_signpanel .fblock {
height:46px;
width:101px;
background-color:#fff;
padding-left:5px;
padding-right:5px;
position:absolute;
top:2px;
right:2px;
font-size:14px;
color:#606060
}
.midaben_con .midaben_signpanel .fblock .all {
height:23px;
line-height:26px;
padding-left:30px;
border-bottom:1px solid #eee;
background-image:url(/Public/qwhome/images/tou2.jpg);
background-repeat:no-repeat;
background-position:5px 0;
margin-bottom:0;
color:#606060
}
.midaben_con .midaben_signpanel .fblock .line {
height:22px;
line-height:24px;
padding-left:30px;
width:60px;
background-image:url(/Public/qwhome/images/tou2.jpg);
background-repeat:no-repeat;
background-position:5px -25px;
color:#606060
}
.midaben_con a.midaben_signpanel:hover {
background-color:#ff7d49;
}
.midaben_con a.midaben_signpanel:active {
background-color:#ff7d49;
}
.midaben_con .default {
cursor:default;
background-color:#ff6f3d;
}
.midaben_con a.default:hover {
background-color:#ff7d49;
}
.midaben_con a.default:active {
background-color:#ff7d49;
}
.midaben_con .visted {
background-position:7px 8px
}
.midaben_con .visted .font {
font-size:20px;
line-height:25px;
width:60px;
left:40px;
top:8px;
text-shadow:0 1px 0 #ff7d49;
}
.midaben_con .visted .nums {
display:block;
font-size:12px;
width:56px;
text-align:center;
line-height:20px;
position:absolute;
color:#fff;
top:29px;
left:43px
}
.midaben_con .midaben_win {
width:205px;
height:115px;
background-color:#fff;
border:1px solid #dedfe3;
border-radius:5px;
position:absolute;
top:-135px;
left:10px;
box-shadow:0 5px 0 #dedfe3;
padding-left:5px;
padding-right:5px
}
.midaben_con .midaben_win .angleA {
width:0;
_border:0;
position:absolute;
bottom:-30px;
left:70px;
border-color:#dedfe3 transparent transparent;
border-style:solid;
border-width:15px
}
.midaben_con .midaben_win .angleB {
width:0;
_border:0;
position:absolute;
bottom:-20px;
left:75px;
border-color:#fff transparent transparent;
border-style:solid;
border-width:10px
}
.midaben_con .midaben_win .title {
padding-left:58px;
height:55px;
padding-top:22px;
background-repeat:no-repeat;
background-image:url(/Public/qwhome/images/tou3.jpg);
background-position:0 5px;
border-bottom:1px solid #eee
}
.midaben_con .midaben_win .title h3 {
font-size:18px;
color:#434a54;
line-height:25px;
font-weight:400;
margin:0;
padding:0
}
.midaben_con .midaben_win .title .con {
font-size:12px;
color:#434a54;
line-height:20px;
font-weight:normal;
width:150px;
margin:0;
padding:0
}
.midaben_con .midaben_win .info {
height:35px;
line-height:35px;
color:#aab2bd;
font-size:14px;
text-align:center;
padding-left:10px
}
.midaben_con a.midaben_signpanel:visited,.midaben_con a.visted:visited,.midaben_con a.visted:hover,.midaben_con a.visted:active {
background-color:#ff6f3d
}

</style>
<script type="text/javascript">
function cjdsign(){
document.getElementById("JD_sign").className = 'midaben_signpanel JD_sign visted';	
document.getElementById("JD_sign").href = 'javascript:;';
document.getElementById("JD_sign").target = '_blank';
document.getElementById("JD_sign").onclick = '';
} 
</script>
<div id="midaben_sign">
    <div class="midaben_con mbm">
        <a class="midaben_signpanel JD_sign" id="JD_sign"href="" onClick="showWindow('login', this.href)">
            <div class="font">
                签到
            </div>
            <span class="nums">
                连续天
            </span>
            <div class="fblock">
                <div class="all">
                    1人
                </div>
                <div class="line">
                    <span style="font-size:12px;">签到看排名</span>
                </div>
            </div>
        </a>
        <div id="JD_win" class="midaben_win JD_win" style="display:none;">
            <div class="title">
                <h3>
                    签到成功
                </h3>
                <p class="con">
                </p>
            </div>
            <div class="info">
            </div>
            <div class="angleA">
            </div>
            <div class="angleB">
            </div>
        </div>
    </div>
</div>

        <!--签到 end 179667784-->
        
        <!--基本统计 start 179667784-->
        <div class="qing_mylist bm">
            <ul>
                <li><a href=""><span>8</span><p>全部任务</p></a></li>
                <li><a href=""><span>0</span><p>我的勋章</p></a></li>
                <li class="borderremove"><a href=""><span>0</span><p>我的帖子</p></a></li>
            </ul>
        </div>
        <!--基本统计 end 179667784-->
        
    	<div id="q_indexdiyright" class="area">
    		<div id="frameCh9wy9" class="cl_frame_bm frame move-span cl frame-1">
    			<div id="frameCh9wy9_left" class="column frame-1-c">
    				<div id="frameCh9wy9_left_temp" class="move-span temp"></div>
    				<div id="portal_block_9" class="cl_block_bm block move-span">
    					<div id="portal_block_9_content" class="dxb_bc">
    						<div class="portal_block_summary">
    							<div class="bm qing_topbox cl">
								    <ul>
								        <li>
								        	<a href="">
								        		<i class="title_line"></i>
								        		<small></small>
								        		<em>认证我的ZUK Z1手机</em>
								        		<span>ZUK认证</span>
								        	</a>
								        </li>
								        <li>
								        	<a href="">
								        		<i class="title_line"></i>
								        		<small></small>
								        		<em>教你如何赚取大量金币</em>
								        		<span>赚金币</span>
								        	</a>
								        </li>
								        <li>
								        	<a href="">
								        		<i class="title_line"></i>
								        		<small></small>
								        		<em>轻松玩转ZUK社区</em>
								        		<span>新手教程</span>
								        	</a>
								        </li>
								    </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

        
        <!--社区导航 start 179667784-->
        <div class="bm qing_sqdh cl">
        	<div id="q_indexdiysqdh" class="area">
        		<div id="frameVybX89" class="cl_frame_bm frame move-span cl frame-1">
        			<div id="frameVybX89_left" class="column frame-1-c">
        				<div id="frameVybX89_left_temp" class="move-span temp"></div>
        				<div id="portal_block_10" class="cl_block_bm block move-span">
        					<div id="portal_block_10_content" class="dxb_bc">
        						<div class="bm_h"><h2>社区导航</h2></div>
        						<div class="big_grid">
								    <a href="" target="_blank">
								    	<img src="/Public/qwhome/picture/common_41_icon.png" width="60" height="60" /><h3>活动中心</h3>最新活动资讯信息发布
								    </a>
								</div>
<div class="big_grid">
    <a href="" target="_blank">
    	<img src="/Public/qwhome/picture/common_42_icon.png" width="60" height="60" /><h3>社区公告</h3>主要负责解封、投诉等事务
    </a>
</div>
</div></div>
<div id="portal_block_11" class="cl_block_bm block move-span">
	<div id="portal_block_11_content" class="dxb_bc">
		<div class="many_grid">
    <ul>
    	<li>
    		<a href="" class="li_1" target="_blank">
    			<img src="/Public/qwhome/picture/common_2_icon.png" width="30" height="30" />业界资讯
    		</a>
    	</li>
    	<li>
    		<a href="" class="li_2" target="_blank">
    			<img src="/Public/qwhome/picture/common_36_icon.png" width="30" height="30" />热议话题
    		</a>
    	</li>
    	<li>
    		<a href="" class="li_3" target="_blank">
    			<img src="/Public/qwhome/picture/common_40_icon.png" width="30" height="30" />硬货科技
    		</a>
    	</li>
    	<li>
    		<a href="" class="li_4" target="_blank">
    			<img src="/Public/qwhome/picture/common_45_icon.png" width="30" height="30" />网友杂谈
    		</a>
    	</li>
    	<li>
    		<a href="" class="li_5" target="_blank">
    			<img src="/Public/qwhome/picture/common_49_icon.png" width="30" height="30" />技巧分享
    		</a>
    	</li>
    	<li>
    		<a href="" class="li_6" target="_blank">
    			<img src="/Public/qwhome/picture/common_51_icon.png" width="30" height="30" />主题壁纸
    		</a>
    	</li>
    </ul>
</div>
</div></div></div></div></div><!--[/diy]-->
</div>
<!--社区导航 end 179667784-->
        
      <div id="q_indexdiyrightdown" class="area">
      	<div id="framelZ9Ybc" class="cl_frame_bm frame move-span cl frame-1">
      		<div id="framelZ9Ybc_left" class="column frame-1-c">
      			<div id="framelZ9Ybc_left_temp" class="move-span temp"></div>
      			<div id="portal_block_12" class="cl_block_bm block move-span">
      				<div id="portal_block_12_content" class="dxb_bc">
      					<div class="bm">
<div class="bm_h"><h2>ZUI下载</h2></div>
<div class="qing_rmtz cl">
<ul>
    <li onMouseOver="this.className='on cl'" onMouseOut="this.className='cl'">
    <i><span></span></i>
    <p>2015-10-28</p>
    <a href="" title="一个喜欢自拍的妹子的相册 不喜勿进" target="_blank">一个喜欢自拍的妹子的相册 不喜勿进</a>
</li>
</ul>
</div>
</div></div></div>

<div id="portal_block_13" class="cl_block_bm block move-span">
	<div id="portal_block_13_content" class="dxb_bc">
		<div class="bm">
<div class="bm_h"><h2>官方公告</h2></div>
<div class="qing_rmtz cl">
<ul>
	<li onMouseOver="this.className='on cl'" onMouseOut="this.className='cl'">
    <i><span></span></i>
    <p>2015-10-28</p>
    <a href="forum.php?mod=viewthread&tid=18" title="一个喜欢自拍的妹子的相册 不喜勿进" target="_blank">一个喜欢自拍的妹子的相册 不喜勿进</a>
</li>
</ul>
</div>
</div></div></div>

<div id="portal_block_14" class="cl_block_bm block move-span">
	<div id="portal_block_14_content" class="dxb_bc"><div class="portal_block_summary">
		<a href="http://www.dzzsk.com" target="_blank">
			<img src="/Public/qwhome/picture/ad1.png" width="100%" />
		</a>
	</div>
</div>
</div>
<div id="portal_block_15" class="cl_block_bm block move-span">
	<div id="portal_block_15_content" class="dxb_bc">
		<div class="portal_block_summary">
			<div class="bm">
    <div class="bm_h cl"><h2>关注ZUK</h2></div>
<div class="qing_weibo cl">
	<div class="sns_widget cl">
    	<a href="http://www.dzzsk.com/" target="_blank"><img src="/Public/qwhome/picture/weibo.jpg" /></a>
        <p><a href="http://www.dzzsk.com/" target="_blank">新浪微博</a></p>
	</div>
    <div class="sns_widget cl">
    	<img src="/Public/qwhome/picture/weixin.jpg" />
        <p>官方微信</p>
	</div>
</div>
</div></div></div></div></div></div></div><!--[/diy]-->
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

	<!-- js -->


</html>