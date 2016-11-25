<?php 
namespace Home\Controller;

use Vendor\Tree;

class AddfriendsController extends ComController 
{   
    public function addfriends()
    {	

		$flag = $this->check_login();
	    if (!$flag) {
	        $errormessage = '请登录后进行加好友';
	        $this->assign('errormessage', $errormessage);
	        $this->display('Public/error');
	        die;
	        }

        var_dump($_POST);
        var_dump($_SESSION);
        $uid = $_SESSION['uid'];
       	$uuid = I('post.uid');
        $name = M('member')->field("uname")->where("uid = $uid")->select();
        $uname = array_column($name,'uname');
        // var_dump($uid);
        // var_dump($uuid);
        $data['dateline'] = time();       
        $data['note'] = I('post.note');
        $data['type'] = I('post.type');
        $data['uid'] = I('post.uid');
        $data['authorid'] = $uid;       
        $data['author'] = $uname[0];
        $id = M('home_notification')->field("id")->where("uid = $uuid and authorid = $uid")->select();
        if($uid == $uuid){
            $this->error("自己不能加自己为好友");
        }
        // var_dump($id);
        if($id == null){            
        $addfriends = M('home_notification')->data($data)->add();
            $this->success("已申请，等待对方同意！");                
        }else{
            $this->error("已申请，请勿重复申请");
        }
    }




    public function notic()
    {
        // var_dump($_SESSION);
        // var_dump($_GET);
        $id = I('get.id');
        // var_dump($id);
        $uid = I('session.uid');

        $names = M('home_notification')->field("author,uid,authorid")->where("id = $id")->select();//查询好友名字

        $data['uid'] = I('session.uid'); //当前用户id
        $data['fuid'] = $names[0]['authorid'];
        $data['fusername'] = $names[0]['author'];
        $data['dateline'] = time();


        $name = M('member')->field("uname")->where("uid = $uid")->select();

        $datas['uid'] = $names[0]['authorid'];
        $datas['fuid'] = I('session.uid'); //当前用户id
        $datas['fusername'] = $name[0]['uname'];
        $datas['dateline'] = time();


        var_dump($name);

        var_dump($uid);
        var_dump($names);
        M('home_friends')->data($data)->add();
        M('home_friends')->data($datas)->add();
        $addid = M("home_notification")->where("id = $id")->delete();
        $this->redirect("Notice/mypost");

    }







    

}