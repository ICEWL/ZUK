<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html class="null">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>&#27880;&#20876;</title>
<script type="text/javascript" src="http://validform.rjboy.cn/wp-content/themes/validform/js/jquery-1.6.2.min.js"></script>

    <link href="/Public/qwreg/css/lid_min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/qwreg/css/lid_zuk_min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/demo/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/demo/css/demo.css" rel="stylesheet" type="text/css"/>
    <style>
		span{
			width: 400px;
		}
    </style>
</head>
<body class="register">
<!-- ldHeader -->
<div id="ldHeader" class="ldHeader">
    <div class="cont clearfix">
        <div class="fleft">
            <a href="<?php echo U('Home/Index/index');?>"><img src="/Public/qwhome/images/logo_new.png"></a>
        </div>
        </div>
</div>



<!-- /ldHeader -->
<div class="cont clearfix">
	<div class="fmain">
	<!-- ldregisthd -->


<div class="ldRegist" id="ldRegist">
   
	<div class="clearfix">
		<div class="regtitle">帐号注册</div>
		<div class="regtext">轻松开启您的神奇之旅，已有联想帐号<a id="toLogin" ></a><a href="<?php echo U('Home/Login/index');?>">在此登录</a></div>
	</div>
	<div class="hd">
		<!-- 手机号注册 -->
		<span class="normal active jsRegMobileTab" style="width:100px"><a href="javascript:;">注册</a></span>
	</div>
</div>
	<!-- /ldregisthd -->
	<!-- ldRegistMobileForm -->
		


<div class="ldRegistMobileForm" id="">
   
	<form method="post" class="registerform" action="<?php echo U('Reg/insert');?>" name="form1">
		<!-- 供200C接口使用 -->
	
		<div class="hd">
			<span class=" normal active" style="width:100px">注册</span>
		
		</div>
		<div class="bd">
			<ul>
				<li>
					<span style="width:100px">用&nbsp;户&nbsp;名：</span>
					<input name="user"  type="text" value='' datatype="s5-16" errormsg="账号至少5个字符,最多16个字符！" ajaxurl="<?php echo U('Reg/user_name');?>" />
					
				</li>
				<li>
					<span style="width:100px">设置密码：</span>
					<input type="password" value="" name="password" class="inputxt" datatype="*5-16" nullmsg="请输入密码！" errormsg="密码范围在5~16位之间！" />
				</li>
				<li>
					<span style="width:100px">确认密码：</span>
					<input type="password" value="" name="password2" class="inputxt" datatype="*" recheck="password" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" />
				</li>

				<li>
					<span style="width:100px">手&nbsp;机&nbsp;号：</span>
					<input type="text" value="" name="tel" class="inputxt" datatype="m" nullmsg="请输入您的手机号码！" errormsg="请输入您的手机号码！"  />
				</li>
				<li>
			        <!-- 验证码： -->
					<span style="width:100px">验&nbsp;证&nbsp;码：</span>
					<input name="verify" placeholder="验证码" id="code" required type="text" class="code jsInput_code" />
					<a class="jsCReset" href="#" onclick="return false;" id="capaaa">
                     <!--    <img class="jsCaptureImg" src="" width="120" height="36"> -->
                         <img src="<?php echo U('Reg/verify_c');?>" id="yz_img" alt="" title="看不清楚？点击刷新" width="100" height="30" style="cursor:pointer;" >
                    </a>
				</li>
<script>
	// 验证码生成  
	var captcha_img = $('#capaaa').find('img')  
	var verifyimg = captcha_img.attr("src");  
	captcha_img.attr('title', '点击刷新');  
	captcha_img.click(function(){  
	    if( verifyimg.indexOf('?')>0){  
	        $(this).attr("src", verifyimg+'&random='+Math.random());  
	    }else{  
	        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
	    }  
	});
</script>
				<li>
					<!-- 短信验证码： -->
					<span style="width:100px">短信验证码：</span>
					<input name="verifycode" type="text" class="code " />
					<input type="button" value='获取验证码' class="codebutton " />
					<input type="hidden" value='重新获取' class="" />
				</li>
				
			</ul>

		</div>
		<div class="ft">
	        <input type="submit" value='立即注册' class="jsSubBtn"/>
		</div>
        <div class="ysq">
        	<!-- 点击“立即注册”，即表示你接受联想<a href="#">隐私权保护政策</a> -->
        	<span style="width:100px">点击“立即注册”，即表示你接受联想<a target="_blank" href="http://www.lenovomobile.com/privacy/">隐私权保护政策</a></span>
        </div>
	</form>
</div>
	
	<!-- /ldRegistMobileForm -->
	<!-- ldRegistEmailForm -->
		
<script type="text/javascript" src="/Public/demo/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/demo/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
		
	$(".registerform").Validform({
		tiptype:3
	});
})
</script>

	
	<!-- /ldRegistEmailForm -->
	</div>
</div>
<!-- ldFooter -->
<div class="ldFooter">
    <span>Copyright &copy;2016 联想集团,All Rights Reserved 版权所有 京ICP备15007699号-4 京公网安备 11010802017522 京网文(2015)0191-121号&nbsp;&nbsp;
        <a target="_blank" href="http://appserver.lenovo.com.cn/Public/public_bottom/legal.shtml">使用条款</a>和<a target="_blank" href="http://appserver.lenovo.com.cn/Public/public_bottom/privacy.shtml">隐私权政策</a></span>

</div>
 


</body>
</html>