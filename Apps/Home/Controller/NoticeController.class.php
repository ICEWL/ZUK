<?php
namespace Home\Controller;

class NoticeController extends ComController 
{
    public function news()
    {

        $this->display('news');
    }


        public function send()
    {

        $this->display('send');
    }


        public function message()
    {

        $this->display('message');
    }


        public function mypost()
    {
        // var_dump($_SESSION);
        // var_dump($_POST);
        // 加好友消息
        $uid = I('session.uid');
        $myp = M('home_notification')->where("$uid = uid")->select();
        $this->assign('myp',$myp);


        //好友历史
        $uid = I('session.uid');
        $friend = M('home_friends')->where("$uid = uid")->select();
        // var_dump($friend);
        $this->assign('friend',$friend);



        $this->display('mypost');
    }












    
}