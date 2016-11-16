<?php
namespace Home\Controller;

class LoginController extends ComController 
{

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
    public function index(){
        $this->display('Login/index');
    }

    //执行登陆验证
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

            $url = U('index/index');
            header("Location: $url");
            exit(0);
        } else {

            $this->error('登录失败，请重试！', U("login/index"));
        }
    }

    /**
     * 用户注销
     */
    public function logout()
    {
        // 清楚所有session
        session(null);
        redirect(U('Login/login'), 2, '正在退出登录...');
    }
    
}