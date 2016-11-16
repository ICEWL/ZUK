<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-15
 * 版    本：1.0.0
 * 功能说明：前台公共控制器。
 *
 **/
namespace Home\Controller;

use Common\Controller\BaseController;
use Think\Auth;

class ComController extends BaseController
{
    
    public $USER;

    public function _initialize()
    {
        C(setting()); 
        if (!C("COOKIE_SALT")) {
            $this->error('请配置COOKIE_SALT信息');
        }

        // 查询登录用户信息
        $UID = I('session.uid/d');
        if ($UID) {
            $user = M('Member')->where(array('uid' => $UID))->find();
            $this->assign('user', $user);
        }
    }

    public function check_login()
    {
        $flag = false;

        $salt = C("COOKIE_SALT");
        $ip = get_client_ip();
        $ua = $_SERVER['HTTP_USER_AGENT'];

        $auth = cookie('auth');

        $uid = session('uid');

        if ($uid) {
            $user = M('member')->where(array('uid' => $uid))->find();

            if ($user) {
                if ($auth ==  password($uid.$user['user'].$ip.$ua.$salt)) {
                    $flag = true;
                    $this->USER = $user;
                }
            }
        }
        return $flag;
    }
}