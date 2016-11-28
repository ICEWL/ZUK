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
        $fri_news = M('home_notification')->where(array('uid' => $uid,'type' => 'friend','new' => 1))->count();
        $new['fri'] = $fri_news;

        // 系统消息
        $admin_news = M('home_notification')->where(array('uid' => $uid,'type' => 'doing','new' => 1))->count();
        $new['admin'] = $admin_news;

        // 新的好友
        $new_news = M('home_notification')->where(array('uid' => $uid,'type' => 'adf'))->count();
        $new['new'] = $new_news;

        $this->assign('new', $new);
    }

    public function news()
    {   
        $uid = I('session.uid/d');
        $this->assign('uid', $uid);

        $prefix = C('DB_PREFIX');  //获取表前缀

        $friendnews = M('home_notification');
        $frinewslist = $friendnews->field("{$prefix}home_notification.*,{$prefix}member.head")
                            ->where(array("{$prefix}home_notification.uid" => $uid,"{$prefix}home_notification.type" => 'friend' ))
                            ->order("{$prefix}home_notification.dateline asc")
                            ->join("{$prefix}member on {$prefix}home_notification.authorid = {$prefix}member.uid", 'left')
                            ->group("{$prefix}home_notification.authorid")
                            ->select();

        $this->assign('frinewslist', $frinewslist);

        $this->display('news');
    }


    public function send()
    {    

        $uaid = I('get.mid/d');

        if ($uaid == '') {
            $uaid = I('post.mid/d');
        }
        session('uaid',$uaid);
        $this->assign('uaid',$uaid);

        
        $uid = I('session.uid');  //自己ID
        $mid = I('post.mid/d');  //别人ID


        if ($mid == '') {
            $mid = I('get.mid/d');
        }

        if ($mid == '') {
            $mid = I('session.uaid/d');
        }
        
        // 查询聊天用户信息
        $muser = M('member')->where(array('uid' => $mid))->select();
        $muser = $muser['0'];
        if ($muser['uid'] == $uid) {
            $this->error('参数错误！');
        }
        $this->assign('muser',$muser);

        // 查询消息
        $prefix = C('DB_PREFIX');  //获取表前缀
        $falg = M('home_notification')->field("{$prefix}home_notification.*,{$prefix}member.head")
                            ->where("({$prefix}home_notification.uid = $uid and {$prefix}home_notification.authorid = $mid) OR ({$prefix}home_notification.uid = $mid and {$prefix}home_notification.authorid = $uid)")
                            ->order("{$prefix}home_notification.dateline asc")
                            ->join("{$prefix}member on {$prefix}home_notification.authorid = {$prefix}member.uid", 'left')
                            ->select();
        $this->assign('falg',$falg);

        // 更新消息状态
        $data['new'] = '0';
        M('home_notification')->data($data)->where("uid = $uid and authorid = $mid")->save();
   
        $this->display('send');
    }


    public function message()
    {
        $uid = I('session.uid');
        $adminmessage = M('home_notification')->order("dateline desc")->where("uid = $uid and type ='doing'")->select();
        $this->assign('adminmessage',$adminmessage);
        $this->display('message');
    }

    public function change($ajax = '')
    {
        if ($ajax == 'yes') {
            $id = I('get.id', 0, 'intval');
            $data['new'] = '0';
            M('home_notification')->where("id='$id'")->save($data);
            die('1');
        }
    }


    public function mypost()
    {

        // 加好友消息
        $uid = I('session.uid');
        $myp = M('home_notification')->where("uid = $uid and type ='adf'")->select();
        $this->assign('myp',$myp);

        //好友历史
        $uid = I('session.uid');
        $friend = M('home_friends')->where("uid = $uid")->select();
        $this->assign('friend',$friend);

        $this->display('mypost');
    }

    
}