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
            $this->error('404 NOT FOUND');
        }

        // 主题数
        $usertotal = M('article')->where(array('mid' => $uid))->count();
        $this->assign('usertotal', $usertotal);

    }
    
    public function dynamic()
    {   
        // 查询用户动态
        $userlist = '';
        $this->assign('userlist', $userlist);   

        $this->display('dynamic');
    }


    public function theme($p = 1)
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

        $this->display('theme');
    }


    public function collecion()
    {

        $this->display('collection');
    }


    public function information()
    {

        $this->display('information');
    }

    public function friends()
    {

        $this->display('friends');
    }
}