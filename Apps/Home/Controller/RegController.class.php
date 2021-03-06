<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：Timothy<yleigg@163.com>
 * 日    期：2016-11-26
 * 版    本：1.0.0
 * 功能说明：前台注册控制器。
 *
 **/

namespace Home\Controller;
use Org\Sms\Smtp;

class RegController extends ComController 
{

    public function index()
    {

        $this->display('Reg/index');    
    }
   

    /** 
     *  
     * 验证码生成 
     */  
    public function verify_c()
    {  
        $Verify = new \Think\Verify();  
        $Verify->fontSize = 18;  
        $Verify->length   = 1;  
        $Verify->useNoise = false;  
        $Verify->codeSet = '0123456789';  
        $Verify->imageW = 130;  
        $Verify->imageH = 50;  
        //$Verify->expire = 600;  
        $Verify->entry();  
    }

    function check_verify($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }




    //手机添加账号密码
    public function insert()
    {
      
         // var_dump($_SESSION);
        $verify = I('param.verify','');  
        if(!$this->check_verify($verify)){
            $this->error("亲，验证码输错了哦！",$this->site_url,3);  
        } 
        
        // var_dump($_SESSION['verifysl']);
        // var_dump($_POST['verifysl']);
        if ($_SESSION['verifysl'] != $_POST['verifysl'] ){
            $this->error('手机验证码输入错误',$this->site_url,30);
            session_destroy();

        }




        $user = isset($_POST['user']) ? htmlspecialchars($_POST['user'], ENT_QUOTES) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : false;
        if ($password) {
            $data['password'] = password($password);
        }
        $data['phone'] = isset($_POST['phone']) ? trim($_POST['phone']) : '';

        $num=rand(100000,999999);
        $data['uname'] = 'zuk_'.$num;

        $data['t'] = time();
            if ($user == '') {
                $this->error('用户名称不能为空！');
            }
            if (!$password) {
                $this->error('用户密码不能为空！');
            }
            if (M('member')->where("user='$user'")->count()) {
                $this->error('用户名已被占用！');
            }
            $data['user'] = $user;
            $uid = M('member')->data($data)->add();

            // 加入积分表

            $datass['uid'] = $uid;
            $datass['credit'] = '200';
            M('user_credit')->data($datass)->add();


            // 分类
            $datas['uid'] = $uid;
            $datas['group_id'] = '9';
            M('auth_group_access')->data($datas)->add();

        if($uid>0){            
            
               $this->success("注册成功！",U('Home/Login/index'));                
        }else{
            $this->error("注册失败,原因:".$user->getError());
        }
            
    }



 //邮箱添加账号密码
    public function insert_s()
    {
      


        $num=rand(100000,999999);
        // var_dump($num);die;

        $data['uname'] = 'zuk_'.$num;

        $user = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : false;
        if ($password) {
            $data['password'] = password($password);
        }
        $data['email'] = isset($_POST['email']) ? trim($_POST['email']) : '';
        $data['user'] = isset($_POST['email']) ? trim($_POST['email']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $data['t'] = time();
            if ($user == '') {
                $this->error('邮箱不能为空！');
            }
            if (!$password) {
                $this->error('密码不能为空！');
            }
            if (M('member')->where("user='$user'")->count()) {
                $this->error('邮箱已被占用！');
            }
            $data['user'] = $user;
            $uid = M('member')->data($data)->add();

             // 加入积分表
            $datass['uid'] = $uid;
            $datass['credit'] = '200';
            M('user_credit')->data($datass)->add();


            // 分类
            $datas['uid'] = $uid;
            $datas['group_id'] = '9';
            M('auth_group_access')->data($datas)->add();

            

            // 发送邮件
            think_send_mail($_POST['email'], $_POST['email'], $subject = '欢迎你加入zuk大社区!',$_POST['email'], $attachment = null);         
        if($uid>0){   
            $this->success("注册成功！",U('Home/Login/index'));                  
        }else{
            $this->error("注册失败,原因:".$user->getError());
        }
            
    }





// 账号检测
    public function user_name()
    {

        $user = I('post.param');
        // var_dump($user);
        $ulist = M(member)->field("user")->where("user='$user'")->select();
        // var_dump($ulist);
    // echo '<br/>';
    // echo $_POST['param'];
    // echo '<br/>';
    // echo $_POST['name'];
    sleep(1);
    if($ulist==null){  
        echo '{
               "info":"账号可以使用",
                "status":"y"
             }';
        }else{
              echo '{
                 "info":"账号已存在，请换一个！",
                "status":"n"
             }';
        }
    }  





// 邮箱检测
    public function user_email()
    {

        $user = I('post.param');
        // var_dump($user);
        $ulist = M(member)->field("email")->where("email='$user'")->select();
        // var_dump($ulist);
    // echo '<br/>';
    // echo $_POST['param'];
    // echo '<br/>';
    // echo $_POST['name'];
    sleep(1);
    if($ulist==null){  
        echo '{
               "info":"邮箱可以使用！",
                "status":"y"
             }';
        }else{
              echo '{
                 "info":"邮箱已使用过！",
                "status":"n"
             }';
        }
    }

}
