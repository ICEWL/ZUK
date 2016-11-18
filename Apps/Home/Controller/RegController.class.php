<?php
namespace Home\Controller;

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
        //实例化Model对象
        // $user = M("member");

        // $_POST['addtime'] = time(); 
        // $user->create();
        // $user->password = md5($_POST['password']);


        $user = isset($_POST['user']) ? htmlspecialchars($_POST['user'], ENT_QUOTES) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : false;
        if ($password) {
            $data['password'] = password($password);
        }
        $data['phone'] = isset($_POST['phone']) ? trim($_POST['phone']) : '';

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



        if($uid>0){            
            
               $this->success("注册成功！",U('Home/Login/index'));                
        }else{
            $this->error("注册失败,原因:".$user->getError());
        }
            
    }



 //邮箱添加账号密码
    public function insert_s()
    {
      
         // var_dump($_SESSION);
        $verify = I('param.verify','');  
        if(!$this->check_verify($verify)){
            $this->error("亲，验证码输错了哦！",$this->site_url,3);  
        } 
        //实例化Model对象
        // $user = M("member");

        // $_POST['addtime'] = time(); 
        // $user->create();
        // $user->password = md5($_POST['password']);

        $num=rand(100000,999999);
        // var_dump($num);die;

        $data['user'] = 'zuk_'.$num;

        $user = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : false;
        if ($password) {
            $data['password'] = password($password);
        }
        $data['email'] = isset($_POST['email']) ? trim($_POST['email']) : '';

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
            // $data['user'] = $user;
            $uid = M('member')->data($data)->add();



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









    public function send(){

        //初始化必填
        $options['accountsid']='642ae11d541ab7d29b459838a0ed7afe'; //填写自己的
        $options['token']='8e7815f59f4c4ebbfef47e4fa7fd741e'; //填写自己的
        //初始化 $options必填
        $ucpass = new \Org\Com\Ucpaas($options);
                
        //随机生成6位验证码
        srand((double)microtime()*1000000);//create a random number feed.
        $ychar="0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
        $list=explode(",",$ychar);
        for($i=0;$i<6;$i++){
        $randnum=rand(0,35); // 10+26;
        $authnum.=$list[$randnum];
        }
        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "5bec7bd129f449369c9278f80b823e9d";  //填写自己的
        $to = $_POST['to'];
        $var_dump($to);
        $templateId = "1";
        $param=$authnum;
        $arr=$ucpass->templateSMS($appId,$to,$templateId,$param);
        if (substr($arr,21,6) == 000000) {
            //如果成功就，这里只是测试样式，可根据自己的需求进行调节
            echo "短信验证码已发送成功，请注意查收短信";
            
        }else{
            //如果不成功
            echo "短信验证码发送失败，请联系客服";
            
        }
        
        
    }  

}
