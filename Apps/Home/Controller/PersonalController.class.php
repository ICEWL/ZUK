<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-21
 * 版    本：1.0.0
 * 功能说明：个人资料控制器。
 *
 **/
namespace Home\Controller;

class PersonalController extends ComController 
{   
    public function _initialize()
    {      
        parent::_initialize();

        //检测是否登录 
        $flag = $this->check_login();
        if (!$flag) {
            $errormessage = '不要乱玩哦！';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/error');
            die;
        }
    }

    public function basic()
    {   
        $this->display('basic');
    }

    public function address()
    {


        $this->display('address');



    }

    public function modifypass()
    {

        $this->display('modifypass');
    }

    public function modifypic()
    {
        $this->display('modifypic');
    }

    public function update()
    {   
        $uid = I('post.uid/d');

        // 判断老密码是否正确
        $passwordold = isset($_POST['passwordold']) ? trim($_POST['passwordold']) : false;
        if ($passwordold) {
            $passwordold = password($passwordold);
            $oldpass = M('member')->field('password')->where(array('uid'=>$uid))->select();
            if ($passwordold === $oldpass['0']['password']) {
                $password = isset($_POST['password']) ? trim($_POST['password']) : false;
                if ($password) {
                    $data['password'] = password($password);
                }
            }else{
                $this->error('亲！你忘了之前的密码了吗？');
            }
        }

        $head = isset($_POST['head']) ? $_POST['head'] : false;

        if ($head <> '') {
            $data['head'] = $head;
        }else{
            $data['head'] = $user['head'];
        }

        $sex = isset($_POST['gender']) ? intval($_POST['gender']) : false;
        if ($sex) {
            $data['sex'] = $sex;
        }

        $birthday = isset($_POST['birthday']) ? strtotime($_POST['birthday']) : false;

        // var_dump($birthday);die;

        if ($birthday) {
            $data['birthday'] = $birthday;
        }

        $mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : false;
        if ($mobile) {
            $data['phone'] = $mobile;
        }

        
        $qq = isset($_POST['qq']) ? trim($_POST['qq']) : false;
        if ($qq) {
            $data['qq'] = $qq;
        }

        $email = isset($_POST['email']) ? trim($_POST['email']) : false;
        if ($email) {
            $data['email'] = $email;
        }

        $uname = isset($_POST['uname']) ? trim($_POST['uname']) : false;
        if ($uname) {
            $data['uname'] = $uname;
        }     

        $Model = M('member');
        $Model->data($data)->where("uid=$uid")->save();

        if (!empty($data['password'])) {
            cookie('auth', null);
            session('uid',null);
            $this->success('恭喜，修改成功！', '/Home/Login');
            die;
        }

        $this->success('恭喜，修改成功！');
    }



    public function phonea()
    {
         if ($_SESSION['verifysl'] != $_POST['verifysl'] ){
            $this->error('手机验证码输入错误',$this->site_url,3);
            session_destroy();
        }
       // var_dump($_POST);
            $data['phone'] =$_POST['phone'];   
            $uid=$_SESSION['uid'];
            $Model = M('member');
            $user = $Model->data($data)->where("uid=$uid")->save();
            // var_dump($Model);
            if ($user) {
                $this->success('恭喜，绑定成功！');
            }else{
                $this->error('绑定失败了！');
            }
 
    }


     public function phoneb()
    {       
        if ($_SESSION['verifysl'] != $_POST['verifysl'] ){
            $this->error('手机验证码输入错误',$this->site_url,3);
            session_destroy();
        }
       // var_dump($_POST);
            $data['phone'] ="";   
            $uid=$_SESSION['uid'];
            $Model = M('member');
           $user =  $Model->data($data)->where("uid=$uid")->save();
            // var_dump($Model);
            if ($user) {
                $this->success('恭喜，解绑成功！');
            }else{
                $this->error('解绑失败了！');
            }

    }



}