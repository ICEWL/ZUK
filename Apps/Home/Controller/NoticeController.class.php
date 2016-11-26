<?php
namespace Home\Controller;

class NoticeController extends ComController 
{   

    public function _initialize()
    {      
        parent::_initialize();
        
        // 检测是否登录
        $flag = $this->check_login();
        if (!$flag) {
            $errormessage = '不要搞事哦！';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/error');
            die;
        }

        $uid = I('session.uid/d');

        // 好友消息
        $fri_news = M('home_notification')->where(array('uid' => $uid,'type' => 'friend'))->count();
        $new['fri'] = $fri_news;

        // 系统消息
        $admin_news = M('home_notification')->where(array('uid' => $uid,'type' => 'doing'))->count();
        $new['admin'] = $admin_news;

        // 新的好友
        $new_news = M('home_notification')->where(array('uid' => $uid,'type' => 'adf'))->count();
        $new['new'] = $new_news;

        $this->assign('new', $new);
    }

    public function news()
    {   
        $uid = I('session.uid/d');
        $frinewslist = M('home_notification')->where(array('uid' => $uid,'type' => 'friend'))->select();

        $this->assign('frinewslist', $frinewslist);

        $this->display('news');
    }


    public function send()
    {    
      
        $uaid = I('get.mid/d');

        session('uaid',$uaid);

        $this->assign('uaid',$uaid);

        $uid = I('session.uid');
        $falg = M('home_notification')->where("$uid = uid")->select();
        $this->assign('falg',$falg);
   
        $this->display('send');
    }


    public function message()
    {

        $this->display('message');
    }


    public function mypost()
    {

        // 加好友消息
        $uid = I('session.uid');
        $myp = M('home_notification')->where("$uid = uid and type = adf")->select();
        $this->assign('myp',$myp);

        //好友历史
        $uid = I('session.uid');
        $friend = M('home_friends')->where("$uid = uid")->select();
        $this->assign('friend',$friend);

        $this->display('mypost');
    }












    
}