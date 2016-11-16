<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：Timothy<yleigg@163.com>
 * 日    期：2016-11-26
 * 版    本：1.0.0
 * 功能说明：前台登录控制器。
 *
 **/

namespace Home\Controller;

class LoginController extends ComController 
{
    public function index()
    {
        $flag = $this->check_login();
        if ($flag) {
            $this->error('您已经登录,正在跳转到主页', U("index/index"));
        }
        $this->display();        
    }

    public function login()
    {
        $username = isset($_POST['user']) ? trim($_POST['user']) : '';
        $password = isset($_POST['password']) ? password(trim($_POST['password'])) : '';

        if ($username == '') {
            $this->error('用户名不能为空！', U("login/index"));
        } elseif ($password == '') {
            $this->error('密码必须！', U("login/index"));
        }

        $model = M("Member");
        $user = $model->field('uid,user')->where(array('user' => $username, 'password' => $password))->find();

        if ($user) {
            $salt = C("COOKIE_SALT");
            $ip = get_client_ip();
            $ua = $_SERVER['HTTP_USER_AGENT'];
            session_start();
            session('uid',$user['uid']);
            //加密cookie信息
            $auth = password($user['uid'].$user['user'].$ip.$ua.$salt);
            cookie('auth', $auth);

            $url = U('index/index');
            header("Location: $url");
            exit(0);
        } else {

            $this->error('用户名或密码错误！', U("login/index"));
        }
    }
}