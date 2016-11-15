<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html class="null">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>&#27880;&#20876;</title>
  <script type="text/javascript" src="http://validform.rjboy.cn/wp-content/themes/validform/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="http://validform.rjboy.cn/Validform/v5.1/Validform_v5.1_min.js"></script>
    <link href="/Public/qwreg/css/lid_min_1.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/qwreg/css/lid_zuk_min_1.css" rel="stylesheet" type="text/css"/>
</head>
<body class="register">
<!-- ldHeader -->
<div id="ldHeader" class="ldHeader">
    <div class="cont clearfix">
        <div class="fleft">
            <a href=""><img src="/Public/qwreg/picture/logo_fm365.png"></a>
        </div>
        </div>
</div>



<script type="text/javascript" src="/Public/qwreg/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/qwreg/js/Validform_v5.1_min.js"></script>


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
		<span class="normal active jsRegMobileTab"><a href="javascript:;">注册</a></span>
	</div>
</div>
	<!-- /ldregisthd -->
	<!-- ldRegistMobileForm -->
		


<div class="ldRegistMobileForm" id="ldRegistMobileForm">
   
	<form method="post" class="demoform" action="<?php echo U('Reg/reg');?>" name="form1">
		<!-- 供200C接口使用 -->
	
		<div class="hd">
			<span class=" normal active"><a href="javascript:;">注册</a></span>
		
		</div>
		<div class="bd">
			<ul>
				<li>
					<span>用户名：</span>
					<input name="name" class="username" type="text" value='' datatype="s5-16" errormsg="昵称至少5个字符,最多16个字符！"/>
                    <img class="jsMOk ok" src="/Public/qwreg/picture/icos.png">
				</li>
				<li>
					<span>设置密码：</span>
					<input name="password" class="password" type="password" datatype="*6-15" errormsg="密码范围在6~15位之间！" />
                    <img class="jsPOk ok" src="/Public/qwreg/picture/icos.png">
					<p>密码长度8~20位，数字、字母、字符至少包含两种</p>
				</li>
				<li>
					<span>确认密码：</span>
					<input name="password2" type="password"  datatype="*" recheck="userpassword" errormsg="您两次输入的账号密码不一致！"  />
                    <img class="jsCPOk ok" src="/Public/qwreg/picture/icos.png">
				</li>

				<li>
					<span>手机号：</span>
					<input class="username" type="password" onpaste="return false;" />
                    <img class="jsCPOk ok" src="/Public/qwreg/picture/icos.png">
				</li>
				<li>
			        <!-- 验证码： -->
					<span>验证码：</span>
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
					<span>短信验证码：</span>
					<input name="verifycode" type="text" class="code " />
					<input type="button" value='获取验证码' class="codebutton " />
					<input type="hidden" value='重新获取' class="" />
                    <img class=" ok" src="/Public/qwreg/picture/icos.png">
				</li>
				
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