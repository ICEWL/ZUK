<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>&#30331;&#24405;&#20837;&#21475;</title>
   


    <link href="/Public/qwreg/css/lid_min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/qwreg/css/lid_zuk_min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/demo/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/demo/css/demo.css" rel="stylesheet" type="text/css"/>

</head>
<body class="login"><!-- ldHeader -->
<div id="ldHeader" class="ldHeader">
    <div class="cont clearfix">
        <div class="fleft">
            <a href="<?php echo U('Home/Index/index');?> "><img src="/Public/qwhome/images/logo_new.png"></a>
        </div>
        <div class="fright">
            <form class="jsLangForm" action="" name="changeLanguage" method="post">
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
<form class="registerform" name="form1" method="post" action="<?php echo U('Login/login');?>">
    <div id="ldLoginForm" class="ldLoginForm comForm">
        <div class="hd clearfix">
            <!--<span>登录帐号</span>-->
            <span>帐号登录</span>
            <a class="qrcode  hide-txt" href="#">QR Code</a>
        </div>
        <div class="bd">
            <div class="mhd">
                <input name="user" class="user" type="text" placeholder='账号' datatype="s5-16" errormsg="账号至少5个字符,最多16个字符！"/>
                <br>
                <br>
        
               <input type="password" value="" name="password" class="inputxt" datatype="*5-16" nullmsg="请输入密码！" errormsg="密码范围在6~16位之间！" />    
            </div>

            <div class="mft">
                <div class="btn">
                    <input type="submit" value='登录' />
                </div>
                <div class="extras clearfix">

                    <span class="fright">
                        <a class="" href="" target="_blank">忘记密码？</a>
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
        <div class="ft">还没有帐号？<a href="<?php echo U('Home/Reg/index');?>" id="register">立即注册</a></div>
    </div>
</form>
<!-- /ldLoginForm -->
	<!-- ldLoginQrcode -->

<!-- /ldLoginQrSucc -->
	</div>
</div>
<!-- ldFooter -->
<div class="ldFooter">
    <span>Copyright &copy;2016 ,All Rights Reserved 版权所有 京ICP备15007699号-4 京公网安备 11010802017522 京网文(2015)0191-121号&nbsp;&nbsp;
        <a target="_blank" href="">使用条款</a>和<a target="_blank" href="">隐私权政策</a></span>
   
</div>


</body>
</html>

<script type="text/javascript" src="/Public/demo/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/demo/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function(){
    //$(".registerform").Validform();  //就这一行代码！;
        
    $(".registerform").Validform({
        tiptype:4
    });
})
</script>