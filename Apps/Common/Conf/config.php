<?php
/**
 *
 * 版权所有：IceNet<icewl.com>
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-08
 * 版    本：1.0.0
 * 功能说明：配置文件。
 *
 **/
return array(
	'DB_TYPE'    			=> 'mysql', 	// 数据库类型
	'DB_HOST'    			=> '127.0.0.1', // 服务器地址
	'DB_NAME'    			=> 'zuk_bbs', 	// 数据库名
	'DB_USER'    			=> 'root', 		// 用户名
	'DB_PWD'     			=> '',			// 密码
	'DB_PORT'    			=> '3306', 		// 端口
	'DB_PREFIX'  			=> 'zuk_', 		// 数据库表前缀
    'DB_CHARSET'			=> 'utf8',      // 数据库编码默认采用utf8

	'TMPL_L_DELIM'          =>  '<{',       // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}>',       // 模板引擎普通标签结束标记

    'URL_MODEL'             =>  2,          // URL访问模式：0 (普通); 1 (PATHINFO); 2 (REWRITE); 3 (兼容) 默认 1

    //配置上传目录
    'TMPL_PARSE_STRING' =>array(
        '__UPLOAD__' => __ROOT__.'/Uploads',
    ),

	'COOKIE_SALT' 			=> '239126037', 	//设置cookie加密密钥  

	
	'SHOW_PAGE_TRACE' =>true,  					// 显示页面Trace信息
);