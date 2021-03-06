<?php
/**
 *
 * 版权所有：IceNet<icewl.com>
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-08
 * 版    本：1.0.0
 * 功能说明：模块公共文件。
 *
 **/

function UpImage($callBack = "image", $width = 100, $height = 100, $image = "")
{

    echo '<iframe scrolling="no" frameborder="0" border="0" onload="this.height=this.contentWindow.document.body.scrollHeight;this.width=this.contentWindow.document.body.scrollWidth;" width=' . $width . ' height="' . $height . '"  src="' . U('Upload/uploadpic',
            array('Width' => $width, 'Height' => $height, 'BackCall' => $callBack)) . '"></iframe>
         <input type="hidden" ' . 'value = "' . $image . '"' . 'name="' . $callBack . '" id="' . $callBack . '">';
}

function BatchImage($callBack = "image", $width = 100, $height = 100, $image = "")
{
    
    echo '<iframe scrolling="no" frameborder="0" border="0" width=100% onload="this.height=this.contentWindow.document.body.scrollHeight;" src="' . U('Upload/batchpic',
            array('Width' => $width, 'Height' => $height, 'BackCall' => $callBack)) . '"></iframe>
		<input type="hidden" ' . 'value = "' . $image . '"' . 'name="' . $callBack . '" id="' . $callBack . '">';
}


/*
 * 函数：网站配置获取函数
 * @param  string $k      可选，配置名称
 * @return array          用户数据
*/
function setting($k = 'all')
{
    $cache = S($k);
    //如果缓存不为空直接返回
    if (null != $cache) {
        return $cache;
    }
    $data = '';
    $setting = M('setting');
    //判断是否查询全部设置项
    if ($k == 'all') {
        $setting = $setting->field('k,v')->select();
        foreach ($setting as $v) {
            $config[$v['k']] = $v['v'];
        }
        $data = $config;

    } else {
        $result = $setting->where("k='{$k}'")->find();
        $data = $result['v'];

    }
    //建立缓存
    if ($data) {
        S($k, $data);
    }
    return $data;
}

/**
 * 函数：格式化字节大小
 * @param  number $size 字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 */
function format_bytes($size, $delimiter = '')
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) {
        $size /= 1024;
    }
    return round($size, 2) . $delimiter . $units[$i];
}

/**
 * 函数：加密
 * @param string            密码
 * @return string           加密后的密码
 */
function password($password)
{
    /*
    *后续整强有力的加密函数
    */
    return md5('Q' . $password . 'W');

}

/**
 * 随机字符
 * @param number $length 长度
 * @param string $type 类型
 * @param number $convert 转换大小写
 * @return string
 */
function random($length = 6, $type = 'string', $convert = 0)
{
    $config = array(
        'number' => '1234567890',
        'letter' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'string' => 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789',
        'all' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
    );

    if (!isset($config[$type])) {
        $type = 'string';
    }
    $string = $config[$type];

    $code = '';
    $strlen = strlen($string) - 1;
    for ($i = 0; $i < $length; $i++) {
        $code .= $string{mt_rand(0, $strlen)};
    }
    if (!empty($convert)) {
        $code = ($convert > 0) ? strtoupper($code) : strtolower($code);
    }
    return $code;
}

//获取所有的子级id
function category_get_sons($sid, &$array = array())
{
    //获取当前sid下的所有子栏目的id
    $categorys = M("category")->where("pid = {$sid}")->select();

    $array = array_merge($array, array($sid));
    foreach ($categorys as $category) {
        category_get_sons($category['id'], $array);
    }
    $data = $array;
    unset($array);
    return $data;

}


/**
 * 统计总数
 * @param $tabname
 * @param $condition
 * @return $string
 */
function total($tabname, $condition = array())
{   
    $where = "1 = 1 ";
    if ($condition) {
        $where.="and $condition";
    }
    return M($tabname)->where($where)->count();
}






function think_send_mail($to, $name, $subject = '', $body = '', $attachment = null){

$config = C('THINK_EMAIL');

Vendor('PHPMailer.PHPMailerAutoload'); //从PHPMailer目录导class.phpmailer.php类文件

$mail = new PHPMailer(); //PHPMailer对象

$mail->CharSet = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码

$mail->IsSMTP(); // 设定使用SMTP服务

$mail->SMTPDebug = 0; // 关闭SMTP调试功能

// 1 = errors and messages

// 2 = messages only

$mail->SMTPAuth = true; // 启用 SMTP 验证功能

$mail->SMTPSecure = 'ssl'; // 使用安全协议

$mail->Host = $config['SMTP_HOST']; // SMTP 服务器

$mail->Port = $config['SMTP_PORT']; // SMTP服务器的端口号

$mail->Username = $config['SMTP_USER']; // SMTP服务器用户名

$mail->Password = $config['SMTP_PASS']; // SMTP服务器密码

$mail->SetFrom($config['FROM_EMAIL'], $config['FROM_NAME']);

$replyEmail = $config['REPLY_EMAIL']?$config['REPLY_EMAIL']:$config['FROM_EMAIL'];

$replyName = $config['REPLY_NAME']?$config['REPLY_NAME']:$config['FROM_NAME'];

$mail->AddReplyTo($replyEmail, $replyName);

$mail->Subject = $subject;

$mail->AltBody = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";

$mail->MsgHTML($body);

$mail->AddAddress($to, $name);

if(is_array($attachment)){ // 添加附件

foreach ($attachment as $file){

is_file($file) && $mail->AddAttachment($file);

}

}

return $mail->Send() ? true : $mail->ErrorInfo;

}