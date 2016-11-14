<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="null">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>&#27880;&#20876;</title>
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=high-dpi">
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

    <link href="/Public/qwreg/css/lid_min_1.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/qwreg/css/lid_zuk_min_1.css" rel="stylesheet" type="text/css"/>
    <!--[if IE]>
        <style>
        .ldILoginForm .bd .mhd input, .ldRegistMobileFormi .hd input{
            height: 25px;
            *vertical-align:super;
            *width:75%;
            *padding-bottom:12px;
            _padding-bottom:12px;
        }
        </style>
    <![endif]-->
    <style type="text/css">
    </style>
</head>
<body class="register">
<!-- ldHeader -->
<div id="ldHeader" class="ldHeader">
    <div class="cont clearfix">
        <div class="fleft">
            <a href="http://www.lenovomobile.com/"><img src="/Public/qwreg/picture/logo_fm365.png"></a>
        </div>
        </div>
</div>

<!-- /ldHeader -->
<div class="cont clearfix">
	<div class="fmain">
	<!-- ldregisthd -->
	

<div class="ldRegist" id="ldRegist">
    <input type="hidden" class="jsPath" value="/wauthen3">
	<!-- 供200C接口使用 -->
	<input type="hidden" name="lenovoid.action" value='uilogin' id="action">
	<input type="hidden" name="lenovoid.realm" value='www.lenovomobile.com'>
	<input type="hidden" name="lenovoid.ctx" value='YUhSMGNEb3ZMMkppY3k1c1pXNXZkbTl0YjJKcGJHVXVZMjR2'>
	<input type="hidden" name="lenovoid.lang" value='null'>
	<input type="hidden" name="lenovoid.uinfo" value='null'>
	<input type="hidden" name="lenovoid.cb" value='http://bbs.lenovomobile.cn/passport.php?act=callback'>
	<input type="hidden" name="lenovoid.vb" value='null'>
	<input type="hidden" name="lenovoid.display" value='null'>
	<input type="hidden" name="lenovoid.idp" value='null'>
	<input type="hidden" name="lenovoid.source" value='null?lenovoid.action=uilogin'>
	<input type="hidden" name="username" class="jsUsername" value='null' />
	<div class="clearfix">
		<div class="regtitle">帐号注册</div>
		<div class="regtext">轻松开启您的神奇之旅，已有联想帐号<a id="toLogin" ></a><a href="<?php echo U('Home/Login/index');?>">在此登录</a></div>
	</div>
	<div class="hd">
		<!-- 手机号注册 -->
		<span class="normal active jsRegMobileTab"><a href="javascript:;">手机号注册</a></span>
		<!-- 邮箱注册 -->
		<span class="normal jsRegEmailTab"><a href="">邮箱注册</a></span>
	</div>
</div>
	<!-- /ldregisthd -->
	<!-- ldRegistMobileForm -->
		


<div class="ldRegistMobileForm" id="ldRegistMobileForm">
    <input type="hidden" class="jsPath" value="/wauthen3">
	<input type="hidden" class="jsError403" value='多次输入错误，请稍后再试...'>
	<form method="post" class="jsRegistForm" action="/wauthen3/mobileRegister" name="form1">
		<!-- 供200C接口使用 -->
		<input class="jsAction" type="hidden" name="lenovoid.action" value='uilogin'>
		<input class="jsRealm" type="hidden" name="lenovoid.realm" value='www.lenovomobile.com'>
		<input class="jsCtx" type="hidden" name="lenovoid.ctx" value='YUhSMGNEb3ZMMkppY3k1c1pXNXZkbTl0YjJKcGJHVXVZMjR2'>
		<input class="jsLang" type="hidden" name="lenovoid.lang" value='null'>
		<input class="jsUinfo" type="hidden" name="lenovoid.uinfo" value='null'>
		<input class="jsCb" type="hidden" name="lenovoid.cb" value='http://bbs.lenovomobile.cn/passport.php?act=callback'>
		<input class="jsVb" type="hidden" name="lenovoid.vb" value='null'>
		<input class="jsDisplay" type="hidden" name="lenovoid.display" value='null'>
		<input class="jsIdp" type="hidden" name="lenovoid.idp" value='null'>
		<input class="jsSource" type="hidden" name="lenovoid.source" value='null?lenovoid.action=uilogin'>
		<input class="jsSNum" type="hidden" value="9109571880"/>
		<div class="hd">
			<span class="jsRegMobileTab normal active"><a href="javascript:;">手机号注册</a></span>
			<span class="jsRegEmailTab normal"><a href="javascript:;">邮箱注册</a></span>
		</div>
		<div class="bd">
			<ul>
				<li>
					<span>手机号：</span>
					<input name="username" class="username jsMobile" type="text" value='' />
                    <img class="jsMOk ok" src="picture/icos.png">
				</li>
				<li>
					<span>设置密码：</span>
					<input name="password" class="password jsPassword" type="password" onpaste="return false;" />
                    <img class="jsPOk ok" src="picture/icos.png">
					<p>密码长度8~20位，数字、字母、字符至少包含两种</p>
				</li>
				<li>
					<span>确认密码：</span>
					<input class="password jsPassword2" type="password" onpaste="return false;" />
                    <img class="jsCPOk ok" src="picture/icos.png">
				</li>
				<li>
			        <!-- 验证码： -->
					<span>验证码：</span>
					<input name="c" type="text" class="code jsInput_code" />
					<a class="jsCReset" href="#" onclick="return false;">
                        <img class="jsCaptureImg" src="" width="120" height="36">
                    </a>
					<input type="hidden" class="jsCInput" name="t"/>
				</li>
				<li>
					<!-- 短信验证码： -->
					<span>短信验证码：</span>
					<input name="verifycode" type="text" class="code jsCode" />
					<input type="button" value='获取验证码' class="codebutton jsCodebutton" />
					<input type="hidden" value='重新获取' class="jsCodebutton2" />
                    <img class="jsOk ok" src="picture/icos.png">
				</li>
				
			</ul>
	    	<ul class="errMsg">
	    		
	    		<li class="jsErrMEmpty"><!-- 手机号不能为空 -->请输入手机号</li>
	            <li class="jsErrMFormat"><!-- 手机号格式不正确 -->手机号格式不正确</li>
	            <li class="jsErrMReged"><!-- 用户已经存在 -->用户已存在，您可以<a class="linkToLogin" href="#">立即登录</a>或<a class="linkToRepass" href="#" target="_blank">找回密码</a></li>
	            <li class="jsErrPEmpty"><!-- 密码不能为空 -->密码不能为空</li>
	            <li class="jsErrPFormat"><!-- 密码格式不正确 -->密码格式不正确</li>
	            <li class="jsErrCPEmpty"><!-- 确认密码不能为空 -->确认密码不能为空</li>
	            <li class="jsErrCPFormat"><!-- 密码格式不正确 -->密码格式不正确</li>
	            <li class="jsErrCPSecond"><!-- 两次输入的密码不一致 -->两次密码不一致</li>
	            <li class="jsErrVEmpty"><!-- 验证码不能为空 -->验证码不能为空</li>
	            <li class="jsErrVFormat"><!-- 验证码不正确 -->验证码错误</li>
	            <li class="jsErrVSmsEmpty"><!-- 短信验证码不能为空 -->短信验证码不能为空</li>
	            <li class="jsErrVSmsFormat"><!-- 短信验证码不正确 -->短信验证码错误</li>
	    	</ul>
		</div>
		<div class="ft">
	        <input type="submit" value='立即注册' class="jsSubBtn"/>
        	<input type="hidden" name="lenovoid.source" value="id_phone"/>
		</div>
        <div class="ysq">
        	<!-- 点击“立即注册”，即表示你接受联想<a href="#">隐私权保护政策</a> -->
        	<span>点击“立即注册”，即表示你接受联想<a target="_blank" href="http://www.lenovomobile.com/privacy/">隐私权保护政策</a></span>
        </div>
	</form>
</div>
	
	<!-- /ldRegistMobileForm -->
	<!-- ldRegistEmailForm -->
		


<div class="ldRegistEmailForm" id="ldRegistEmailForm">
    <input type="hidden" class="jsPath" value="/wauthen3">
    <input type="hidden" class="jsError403" value='多次输入错误，请稍后再试...'>
	<form method="post" class="jsRegistEmailForm" action="/wauthen3/emailRegister" name="form1">
		<!-- 供200C接口使用 -->
		<input class="jsAction" type="hidden" name="lenovoid.action" value='uilogin'>
		<input class="jsRealm" type="hidden" name="lenovoid.realm" value='www.lenovomobile.com'>
		<input class="jsCtx" type="hidden" name="lenovoid.ctx" value='YUhSMGNEb3ZMMkppY3k1c1pXNXZkbTl0YjJKcGJHVXVZMjR2'>
		<input class="jsLang" type="hidden" name="lenovoid.lang" value='null'>
		<input class="jsUinfo" type="hidden" name="lenovoid.uinfo" value='null'>
		<input class="jsCb" type="hidden" name="lenovoid.cb" value='http://bbs.lenovomobile.cn/passport.php?act=callback'>
		<input class="jsVb" type="hidden" name="lenovoid.vb" value='null'>
		<input class="jsDisplay" type="hidden" name="lenovoid.display" value='null'>
		<input class="jsIdp" type="hidden" name="lenovoid.idp" value='null'>
		<input class="jsSource" type="hidden" name="lenovoid.source" value='null?lenovoid.action=uilogin'>
		<div class="hd">
			<span class="jsRegMobileTab normal"><a href="javascript:;">手机号注册</a></span>
			<span class="jsRegEmailTab normal active"><a href="javascript:;">邮箱注册</a></span>
		</div>
		<div class="bd">
			<ul>
				<li>
					<span>邮箱：</span>
					<input name="username" type="text" class="username jsEmail" value='' />
                    <img class="jsEOk ok" src="picture/icos.png">
				</li>
				<li>
					<span>设置密码：</span>
					<input name="password" class="password jsPassword" type="password" onpaste="return false;"/>
                    <img class="jsPOk ok" src="picture/icos.png">
					<p>密码长度8~20位，数字、字母、字符至少包含两种</p>
				</li>
				<li>
					<span>确认密码：</span>
					<input class="password jsPassword2" type="password" onpaste="return false;" />
                    <img class="jsCPOk ok" src="picture/icos.png">
				</li>
				<li>
			        <!-- 验证码： -->
					<span>验证码：</span>
					<input name="c" type="text" class="code jsInput_code" />
					<a class="jsCReset" href="#" onclick="return false;">
                        <img class="jsCaptureImg" src="" width="120" height="36">
                    </a>
					<input type="hidden" class="jsCInput" name="t"/>
				</li>
			</ul>
	    	<ul class="errMsg">
	    		
	            <li class="jsErrEEmpty"><!-- 邮箱不能为空 -->帐号不能为空</li>
	            <li class="jsErrEFormat"><!-- 邮箱格式不正确 -->邮箱格式不正确</li>
	            <li class="jsErrEReged"><!-- 用户已经存在 -->用户已存在，您可以<a class="linkToLogin" href="#">立即登录</a>或<a class="linkToRepass" href="#" target="_blank">找回密码</a></li>
	            <li class="jsErrPEmpty"><!-- 密码不能为空 -->密码不能为空</li>
	            <li class="jsErrPFormat"><!-- 密码格式不正确 -->密码格式不正确</li>
	            <li class="jsErrCPEmpty"><!-- 确认密码不能为空 -->确认密码不能为空</li>
	            <li class="jsErrCPFormat"><!-- 密码格式不正确 -->密码格式不正确</li>
	            <li class="jsErrCPSecond"><!-- 两次输入的密码不一致 -->两次密码不一致</li>
	            <li class="jsErrVEmpty"><!-- 验证码不能为空 -->验证码不能为空</li>
	            <li class="jsErrVFormat"><!-- 验证码不正确 -->验证码错误</li>
	    	</ul>
		</div>
		<div class="ft">
	        <input type="submit" value='立即注册' class="jsSubBtn"/>
        	<input type="hidden" name="lenovoid.source" value="id_phone"/>
		</div>
        <div class="ysq">
        	<!-- 点击“立即注册”，即表示你接受联想<a href="#">隐私权保护政策</a> -->
        	<span>点击“立即注册”，即表示你接受联想<a target="_blank" href="http://www.lenovomobile.com/privacy/">隐私权保护政策</a></span>
        </div>
	</form>
</div>
	
	<!-- /ldRegistEmailForm -->
	</div>
</div>
<!-- ldFooter -->
<div class="ldFooter">
    <span>Copyright &copy;2016 联想集团,All Rights Reserved 版权所有 京ICP备15007699号-4 京公网安备 11010802017522 京网文(2015)0191-121号&nbsp;&nbsp;
        <a target="_blank" href="http://appserver.lenovo.com.cn/Public/public_bottom/legal.shtml">使用条款</a>和<a target="_blank" href="http://appserver.lenovo.com.cn/Public/public_bottom/privacy.shtml">隐私权政策</a></span>
    <!--
    <span>|</span>
    <span><a target="_blank" href="http://www.lenovomm.com/footer/contactus.html">帮助</a></span>
    -->
</div>
<!-- /ldFooter -->
<script type="text/javascript" src="/Public/qwreg/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/qwreg/js/lid_min.js"></script>    
<!--[if lt IE 10]>
    <script type="text/javascript" src="js/placeholders_min_1.js"></script>
<![endif]-->
<script>
$(document).ready(function(e){
    /*
    var sTmpUrl;
    if (document.referrer) {
        sTmpUrl = 'http://www.zuk.com/jumpinto.html?jumpurl='+document.referrer;
    }else{
        sTmpUrl = 'http://www.zuk.com/';
    };
    $('.jsTripartite a').eq(0).attr('href', sTmpUrl);
    */


    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?dd563cd2e3ebf51875f7a58ad5ad8e6f";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();


    var pageId = '';

    //Avatar pageId settings
    //pageId为页面对应的PageView，请见文档中页面事件
    
        pageId = "AccountRegister";      
    

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
        scriptTag.src = "https://passport.lenovomobile.com/wauthen3/wauth/js/avatar_zuk.js?v=1.0.0.1";
        var head=document.getElementsByTagName("head")[0]||document.documentElement;
        head.insertBefore(scriptTag, head.firstChild);


});


</script>
</body>
</html>