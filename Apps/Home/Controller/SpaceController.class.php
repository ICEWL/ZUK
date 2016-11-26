<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-17
 * 版    本：1.0.0
 * 功能说明：个人主页控制器。
 *
 **/
namespace Home\Controller;

use Vendor\Tree;

class SpaceController extends ComController 
{   

    public function _initialize()
    {      
        parent::_initialize();
        
        // 用户信息
        $uid = isset($_GET['mid']) ? $_GET['mid'] : '';
        $muser = M('Member')->where(array('uid' => $uid))->find();
        if ($muser) {
            $this->assign('muser', $muser);
        } else{
            $errormessage = '抱歉，您指定的用户空间不存在';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/notfound');
            die;
        }

        // 主题数
        $userposts = M('article')->where(array('mid' => $uid))->count();
        $usertotal['userposts'] = $userposts;

        // 收藏帖子数
        $userfavorite = M('home_favorite')->where(array('uid' => $uid))->count();
        $usertotal['userfavorite'] = $userfavorite;

        // 回复帖子数
        $userreply = M('home_comment')->where(array('uid' => $uid))->count();
        $usertotal['userreply'] = $userreply;

        // 好友数
        $userfriends = M('home_friends')->where(array('uid' => $uid))->count();
        $usertotal['userfriends'] =$userfriends;

        // 积分
        $usercredit = M('user_credit')->field('credit')->where(array('uid' => $uid))->select();
        $usertotal['usercredit'] = $usercredit['0']['credit'];

        // 查询用户头衔
        $score = M('score')->order('jid asc')->select();

        foreach ($score as $k => $v) {
            $min[] = $v['min'];
            $honor[] = $v['honor'];
        }

        $rank = $usertotal['usercredit'];

        if ($rank >= $min['0'] and $rank <= $min['1']) {
            $usertotal['usercore'] = $honor['0'];
        }elseif ($rank > $min['1'] and $rank <= $min['2']) {
            $usertotal['usercore'] = $honor['1'];
        }elseif ($rank > $min['2'] and $rank <= $min['3']) {
            $usertotal['usercore'] = $honor['2'];
        }elseif ($rank > $min['3'] and $rank <= $min['4']) {
            $usertotal['usercore'] = $honor['3'];
        }elseif ($rank > $min['4'] and $rank <= $min['5']) {
            $usertotal['usercore'] = $honor['4'];
        }elseif ($rank > $min['5'] and $rank <= $min['6']) {
            $usertotal['usercore'] = $honor['5'];
        }elseif ($rank > $min['6'] and $rank <= $min['7']) {
            $usertotal['usercore'] = $honor['6'];
        }elseif ($rank > $min['7'] and $rank <= $min['8']) {
            $usertotal['usercore'] = $honor['7'];
        }else{
            $usertotal['usercore'] = $honor['8'];
        }

        $this->assign('usertotal', $usertotal);

    }
    
    public function dynamic($p = 1)
    {   

        $home_comment = M('home_comment');

        $prefix = C('DB_PREFIX');  //获取表前缀

        $pagesize = 5;  //每页数量
        $offset = $pagesize * ($p - 1);  //计算记录偏移量
        $p = intval($p) > 0 ? $p : 1;

        $mid = I('get.mid/d');
        $where = "{$prefix}home_comment.uid = $mid ";

        $orderby = "t desc";  //默认按照时间降序

        $count = $home_comment->where($where)->count();

        $userlist = $home_comment->field("{$prefix}home_comment.*,{$prefix}article.title")
                            ->where($where)
                            ->order($orderby)
                            ->join("{$prefix}article on {$prefix}home_comment.tid = {$prefix}article.aid", 'left')
                            ->limit($offset . ',' . $pagesize)
                            ->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('page', $page);

        
        $this->assign('userlist', $userlist);  

        $this->display('dynamic');
    }


    public function stheme($p = 1)
    {   

        $article = M('article');

        $prefix = C('DB_PREFIX');  //获取表前缀

        $pagesize = 8;  //每页数量
        $offset = $pagesize * ($p - 1);  //计算记录偏移量
        $p = intval($p) > 0 ? $p : 1;

        $mid = I('get.mid/d');
        $where = "{$prefix}article.mid = $mid ";

        $orderby = "t desc";  //默认按照时间降序

        $count = $article->where($where)->count();

        $postslist = $article->field("{$prefix}article.*,{$prefix}category.name,{$prefix}category.pid")
                            ->where($where)
                            ->order($orderby)
                            ->join("{$prefix}category on {$prefix}article.sid = {$prefix}category.id", 'left')
                            ->limit($offset . ',' . $pagesize)
                            ->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();

        $this->assign('postslist', $postslist);
        $this->assign('page', $page);

        $this->display('stheme');
    }


    public function collection($p = 1)
    {

        $home_favorite = M('home_favorite');

        $prefix = C('DB_PREFIX');  //获取表前缀

        $pagesize = 8;  //每页数量
        $offset = $pagesize * ($p - 1);  //计算记录偏移量
        $p = intval($p) > 0 ? $p : 1;

        $mid = I('get.mid/d');
        $where = "{$prefix}home_favorite.uid = $mid ";

        $orderby = "t desc";  //默认按照时间降序

        $count = $home_favorite->where($where)->count();

        $favoritelist = $home_favorite->field("{$prefix}home_favorite.*,{$prefix}article.sid,{$prefix}category.name,{$prefix}category.pid")
                            ->where($where)
                            ->order($orderby)
                            ->join("{$prefix}article on {$prefix}home_favorite.tid = {$prefix}article.aid", 'left')
                            ->join("{$prefix}category on {$prefix}article.sid = {$prefix}category.id", 'left')
                            ->limit($offset . ',' . $pagesize)
                            ->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();

        $this->assign('favoritelist', $favoritelist);
        $this->assign('page', $page);


        $this->display('collection');
    }


    public function information()
    {  

        $this->display('information');
    }

    public function friends()
    {   

        $mid = I('get.mid/d');
        $prefix = C('DB_PREFIX');  //获取表前缀
        $friend = M('home_friends');
        $friendslist = $friend->field("{$prefix}home_friends.*,{$prefix}member.head")
                            ->where(array("{$prefix}home_friends.uid" => $mid))
                            ->join("{$prefix}member on {$prefix}home_friends.fuid = {$prefix}member.uid", 'left')
                            ->select();

        $this->assign('friendslist', $friendslist);

        $this->display('friends');
    }
}