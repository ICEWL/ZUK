<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>&#30331;&#24405;&#20837;&#21475;</title>
   
    <script type="text/javascript">
    if (screen.width < 360) {
        var mvp = document.getElementById('viewport');
        mvp.setAttribute('content','width=360, initial-scale=0.87, minimum-scale=0.87, maximum-scale=0.87, user-scalable=no, target-densitydpi=high-dpi');
    }
    
    /****************************************/
    /*页面开始加载前的时间，用于统计页面加载时间。放置于最前以保证准确性。
    /****************************************/
    var STARTTIME=new Date().getTime();
    </script>

    <link href="/Public/qwreg/css/lid_min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/qwreg/css/lid_zuk_min.css" rel="stylesheet" type="text/css"/>

    <style type="text/css">
    </style>
</head>
<body class="login"><!-- ldHeader -->
<div id="ldHeader" class="ldHeader">
    <div class="cont clearfix">
        <div class="fleft">
            <a href="<?php echo U('Home/Index/index');?> "><img src="/Public/qwreg/picture/logo_fm365.png"></a>
        </div>
        <div class="fright">
            <form class="jsLangForm" action="/wauthen3/preLogin" name="changeLanguage" method="post">
                <select>
                    <option value="zh_CN" >中文（简体）</option>
                    <option value="en_US" >English</option>
                </select>
                <input class="jsInputLang" type="hidden" name="lang" value="">
            </form>
        </div>
        </div>
</div>
<!-- /ldHeader -->
<div class="cont clearfix">
	<div class="fleft w58-2">
	<!-- ldLoginIntro -->
		<div class="ldLoginIntro">
    <img width="450px" src="/Public/qwreg/picture/main_fm365.png" />
</div><!-- /ldLoginIntro -->
	</div>
	<div class="fright w41-7">
	<!-- ldLoginForm -->
		<form class="jsLoginForm" name="form1" method="post" action="/wauthen3/userLogin">
    <!-- 供200C接口使用 start-->
    <input type="hidden" name="lenovoid.action" value='uilogin'>
    <input type="hidden" name="lenovoid.realm" value='www.lenovomobile.com'>
    <input type="hidden" name="lenovoid.ctx" value='YUhSMGNEb3ZMMkppY3k1c1pXNXZkbTl0YjJKcGJHVXVZMjR2'>
    <input type="hidden" name="lenovoid.lang" value='null'>
    <input type="hidden" name="lenovoid.uinfo" value='null'>
    <input type="hidden" name="lenovoid.cb" value='http://bbs.lenovomobile.cn/passport.php?act=callback'>
    <input type="hidden" name="lenovoid.vb" value='null'>
    <input type="hidden" name="lenovoid.display" value='null'>
    <input type="hidden" name="lenovoid.idp" value='null'>
    <input type="hidden" name="lenovoid.source" value='null'>
    <!-- 供200C接口使用 end-->
    <input type="hidden" name="crossRealmDomains" value='null' class="jsCrossDomainLogin">
    <!--<input type="hidden" name="isNeedPic" value='null' class="jsIsNeedPic">-->
    <input type="hidden" name="isNeedPic" value="0" class="jsIsNeedPic">
    <input type="hidden" name="sUrlRegister" value="<?php echo U('Home/Reg/index');?>" class="jsUrlRegister">
    <input class="jsPath" type="hidden" name="path" value=''>


    <div id="ldLoginForm" class="ldLoginForm comForm">
        <div class="hd clearfix">
            <!--<span>登录帐号</span>-->
            <span>帐号登录</span>
            <a class="qrcode jsQrCode hide-txt" href="#">QR Code</a>
        </div>
        <div class="bd">
            <div class="mhd">
                <input name="username" class="username jsUsername" type="text" placeholder='邮箱或手机号' value=''/>
                <input autocomplete="off" name="password" class="password jsPassword" type="password" placeholder='密码' value=""/>
            </div>
            <div class="mbd">
                <div class="errMsg">
                    <ul>
                        <li class="jsErrUEmpty"><!-- 邮箱地址或手机号不能为空 -->邮箱地址或手机号不能为空</li>
                        <li class="jsErrUFormat"><!-- 邮箱地址或手机号格式不正确 -->邮箱地址或手机号格式不正确</li>
                        <li class="jsErrPEmpty"><!-- 密码不能为空 -->密码不能为空</li>
                        <li class="jsErrPFormat"><!-- 密码格式不正确 -->密码格式不正确</li>
                        <li class="jsErrVEmpty"><!-- 验证码不能为空 -->验证码不能为空</li>
                        <li class="jsErrLoginQFail"><!--您已取消二维码登录，请重新登录-->您已取消二维码登录，请重新登录</li>
                    </ul>
                </div>
                <div class="capture jsCapture">
                    <input name="c" type="text" class="input_code jsInput_code" placeholder='验证码'/>
                    <a class="jsCReset" href="#" onclick="return false;">
                        <img class="jsCaptureImg" src="" width="120" height="42">
                    </a>
                    <input type="hidden" class="jsCInput" name="t" value=""/>
                </div>
            </div>
            <div class="mft">
                <div class="btn">
                    <input type="submit" value='登录' class="jsSubBtn"/>
                </div>
                <div class="extras clearfix">
                    <span class="fleft">
                        <label>
                            <input type="checkbox" name="autoLoginState" value="1" checked="checked"/>&nbsp;自动登录</label>
                    </span>
                    <span class="fright">
                        <a class="jsTparty tparty" href="#" onclick="return false;">合作帐号登录</a>
                        <span>|</span>
                        <a class="jsRePwd" href="" target="_blank">忘记密码？</a>
                    </span>
                </div>
                <div class="tripartite jsTripartite">
                    <ul>
                        <li><a href=""><img alt="" src="/Public/qwreg/picture/tripartite_qq.png"></a></li>
                        <li><a href=""><img alt="" src="/Public/qwreg/picture/tripartite_wenbo.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ft">还没有帐号？<a href="javascript:void(0)" id="register">立即注册</a></div>
    </div>
</form>
<!-- /ldLoginForm -->
	<!-- ldLoginQrcode -->
		<div id="ldLoginQrcode" class="ldLoginQrcode comForm">
    <div class="hd clearfix">
        <span>登录帐号</span>
        <a class="ldPC jsLdPC hide-txt" href="#">PC</a>
    </div>
    <div class="bd">请使用手机客户端扫描登录</div>
    <div class="ft">
        <div class="lQrCode">
            <img class="jsQrImg" src="" width="184"/>
        </div>
        <div class="signup"><a href="<?php echo U('Home/Reg/index');?>">注册帐号</a></div>
    </div>
</div>
<!-- /ldLoginQrcode -->
	<!-- ldLightBox -->
		<div id="ldLightbox" class="ldLightbox">
    <div class="ldMask"></div>
    <div class="ldMaskCont">
        <div class="hd clearfix">
            <a class="jsLbClose" href="#" onclick="return false;"><img src="/Public/qwreg/picture/download_close.png"></a>
        </div>
        <div class="bd clearfix">
            <div class="mhd">
                <img src="/Public/qwreg/picture/download_pcimg.png">
            </div>
            <div class="mbd">
                <ul>
                    <li>
                        <!-- 一键登录，方便快捷 -->
                        <h2>一键登录，方便快捷</h2>
                        <!-- 无需任何繁琐输入，避免密码泄露 -->
                        <span>无需任何繁琐输入，避免密码泄露</span>
                    </li>
                    <li>
                        <!-- 一次登录，畅游联想 -->
                        <h2>一次登录，畅游联想</h2>
                        <!-- 支持乐云记事、乐云同步、乐商店、茄子快传 -->
                        <span>支持乐云记事、乐云同步、乐商店、茄子快传</span>
                    </li>
                    <li>
                        <!-- 全新体验，灵动呈现 -->
                        <h2>全新体验，灵动呈现</h2>
                        <!-- 全新VIBE风格界面，管理个人资料更简单 -->
                        <span>全新VIBE风格界面，管理个人资料更简单</span>
                    </li>
                </ul>
            </div>
            <div class="mft">
                <!-- 联想帐号手机客户端 -->
                <div class="dltitle">联想帐号手机客户端</div>
                <!-- 大小： -->
                <div class="dltext">大小：500kb</div>
                <div class="login_code">
                    <img src="" class="jsQrImg" width="184px"/>
                </div>
                <!-- 扫一扫，马上下载到手机 -->
                <div class="dlcodett">扫一扫，马上下载到手机</div>
                <!-- 下载到电脑 -->
                <a class="dlPc" href=' '>下载到电脑</a>
            </div>
        </div>
    </div>
</div>
<!-- /ldLightBox -->
	<!-- ldLoginQrSucc -->
		<div id="ldLoginQCSucc" class="ldLoginQCSucc comForm">
    <div class="hd">
        <img src="/Public/qwreg/picture/scanning_success.png">
    </div>
    <div class="bd">
        <!-- 扫描成功 -->
        <div class="succTitle">扫描成功</div>
        <!-- 请在手机点击确认以登录 -->
        <div class="succTxt">请在手机点击确认以登录</div>
    </div>
    <div class="ft"><!-- 使用其他方式登录，请<a href="preLogin" id="return">返回</a> -->使用其他方式登录，请<a href="" id="return">返回</a></div>
</div>
<!-- /ldLoginQrSucc -->
	</div>
</div>
<!-- ldFooter -->
<div class="ldFooter">
    <span>Copyright &copy;2016 联想集团,All Rights Reserved 版权所有 京ICP备15007699号-4 京公网安备 11010802017522 京网文(2015)0191-121号&nbsp;&nbsp;
        <a target="_blank" href="">使用条款</a>和<a target="_blank" href="">隐私权政策</a></span>
   
</div><!-- /ldFooter -->
<script type="text/javascript" src="/Public/qwreg/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/qwreg/js/lid_min.js"></script>    

<script>
$(document).ready(function(e){
   


    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();


    var pageId = '';

    //Avatar pageId settings
    //pageId为页面对应的PageView，请见文档中页面事件
    
        pageId = "Login";      
    

    /****************************************/
    /*配置及初始化
    /****************************************/
        var avatar=window.Avatar||[];
        window.Avatar=avatar;
        avatar.push({
        startTime:STARTTIME   //统计加载时间
        ,pageId:pageId
        ,appKey:'Z508CSNJ71W7' //标识被统计的应用
        //,events:{click:{list:Clicks, remover:RemoveClick}}
        ,init:function(){//页面初始化完成后发送统计前调用，通常用于设置额外的参数，而这些参数又需要Avatar的辅助
        //Avatar.setOption('PVInfo', {ref:Avatar.getProperty("ref")+'^'+Avatar.getProperty("pref")});
        Avatar.setOption('PVInfo', {times:Avatar.getProperty('nps')});
    }
    });
        /****************************************/
        /*加载Avatar
         /****************************************/
        var scriptTag = document.createElement('script');
        scriptTag.type = 'text/javascript';
        scriptTag.async = true;//异步的方式保证不阻塞页面；
        scriptTag.src = "";
        var head=document.getElementsByTagName("head")[0]||document.documentElement;
        head.insertBefore(scriptTag, head.firstChild);


});


</script>
</body>
</html>