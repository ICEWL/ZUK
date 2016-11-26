<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-25
 * 版    本：1.0.0
 * 功能说明：个人中心控制器。
 *
 **/

namespace Home\Controller;

use Vendor\Tree;

class MyController extends ComController 
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

    }

    public function posts($p = 1)
    {   

        $article = M('article');

        $pagesize = 8;  //每页数量
        $offset = $pagesize * ($p - 1);  //计算记录偏移量
        $p = intval($p) > 0 ? $p : 1;

        $prefix = C('DB_PREFIX');

        $orderby = " t desc";

        $uid = I('session.uid/d');

        // 帖子状态
        $where = "{$prefix}article.mid = $uid and {$prefix}article.status = 0 ";
        $status = I('get.status/d');
        if ($status == '1') {
            $where = "{$prefix}article.mid = $uid and {$prefix}article.status = 1 ";
        }

        // 查询帖子
        $postslist = $article->field("{$prefix}article.*,{$prefix}category.name,{$prefix}category.pid")
                             ->where($where)
                             ->order($orderby)
                             ->join("{$prefix}category on {$prefix}article.sid = {$prefix}category.id", 'left')
                             ->limit($offset . ',' . $pagesize)
                             ->select();
        // 分页处理
        $count = $article->where($where)->count();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();

        $this->assign('postslist', $postslist);
        $this->assign('page', $page);

        $this->display('posts');
    }

    public function delPosts()
    {
        $aids = isset($_REQUEST['aids']) ? $_REQUEST['aids'] : false;
        if ($aids) {
            if (is_array($aids)) {
                $aids = implode(',', $aids);
                $map['aid'] = array('in', $aids);
            } else {
                $map = 'aid=' . $aids;
            }
            if (M('article')->where($map)->delete()) {
                $this->success('恭喜，帖子删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }
    }


    public function reply($p = 1)
    {
        $home_comment = M('home_comment');

        $prefix = C('DB_PREFIX');  //获取表前缀

        $pagesize = 5;  //每页数量
        $offset = $pagesize * ($p - 1);  //计算记录偏移量
        $p = intval($p) > 0 ? $p : 1;

        $mid = I('session.uid/d');
        $where = "{$prefix}home_comment.uid = $mid ";

        $orderby = "t desc";  //默认按照时间降序

        $count = $home_comment->where($where)->count();

        $replylist = $home_comment->field("{$prefix}home_comment.*,{$prefix}article.title")
                            ->where($where)
                            ->order($orderby)
                            ->join("{$prefix}article on {$prefix}home_comment.tid = {$prefix}article.aid", 'left')
                            ->limit($offset . ',' . $pagesize)
                            ->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('page', $page);

        
        $this->assign('replylist', $replylist);  

        $this->display('reply');
    }

    public function delReply()
    {
        $replys = isset($_REQUEST['replys']) ? $_REQUEST['replys'] : false;
        if ($replys) {
            if (is_array($replys)) {
                $replys = implode(',', $replys);
                $map['cid'] = array('in', $replys);
            } else {
                $map = 'cid=' . $replys;
            }
            if (M('home_comment')->where($map)->delete()) {
                $this->success('恭喜，回复删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }
    }


    public function friends()
    {
        $mid = I('session.uid/d');
        $prefix = C('DB_PREFIX');  //获取表前缀
        $friend = M('home_friends');
        $friendslist = $friend->field("{$prefix}home_friends.*,{$prefix}member.head")
                            ->where(array("{$prefix}home_friends.uid" => $mid))
                            ->join("{$prefix}member on {$prefix}home_friends.fuid = {$prefix}member.uid", 'left')
                            ->select();

        $this->assign('friendslist', $friendslist);

        $this->display('friends');
    }

    public function remove()
    {
        $uid = I('session.uid/d');

        $fid = I('get.fid/d') ? I('get.fid/d') : false;

        $friend = M('home_friends')->where(array('uid'=>$uid,'fuid'=>$fid))->select();

        if ($friend) {
            M('home_friends')->where(array('uid'=>$uid,'fuid'=>$fid))->delete();
            M('home_friends')->where(array('uid'=>$fid,'fuid'=>$uid))->delete();
            $this->success('恭喜，解除好友成功！');
        }else {
            $this->error('参数错误！');
        }  

    }


    public function collection($p = 1)
    {   
        $home_favorite = M('home_favorite');

        $prefix = C('DB_PREFIX');  //获取表前缀

        $pagesize = 8;  //每页数量
        $offset = $pagesize * ($p - 1);  //计算记录偏移量
        $p = intval($p) > 0 ? $p : 1;

        $mid = I('session.uid/d');
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

    public function delFavorite()
    {
        $favorite = isset($_REQUEST['favorite']) ? $_REQUEST['favorite'] : false;
        if ($favorite) {
            if (is_array($favorite)) {
                $favorite = implode(',', $favorite);
                $map['favid'] = array('in', $favorite);
            } else {
                $map = 'favid=' . $favorite;
            }
            if (M('home_favorite')->where($map)->delete()) {
                $this->success('恭喜，取消收藏成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }
    }

    public function mygrade()
    {
        
        $this->display('mygrade');
    }

}