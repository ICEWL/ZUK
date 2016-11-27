<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-08
 * 版    本：1.0.0
 * 功能说明：后台首页控制器。
 *
 **/

namespace Admin\Controller;

class IndexController extends ComController
{
    public function index()
    {

        $model = new \Think\Model();
        $mysql = $model->query("select VERSION() as mysql");
        $p = isset($_GET['p']) ? intval($_GET['p']) : '1';
        $t = time() - 3600 * 24 * 60;
        $log = M('log');
        $log->where("t < $t")->delete();//删除60天前的日志
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $count = $log->count();
        $list = $log->order('id desc')->limit($offset . ',' . $pagesize)->select();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);

        $this->assign('mysql', $mysql[0]['mysql']);
        $this->assign('nav', array('', '', ''));//导航

        $newpost = M("member")->order('t desc')->limit(4)->select();
        $this->assign('newpost', $newpost);

        // 获取用户数：
        $userCount = M('member')->count();
        $this->assign('userCount', $userCount);

        // 获取封禁用户数：
        $nuserCount = M('member')->where('status = "1"')->count();
        $this->assign('nuserCount', $nuserCount);


        // 获取帖子数：
        $airCount = M('article')->count();
        $this->assign('airCount', $airCount);

        //获取手机绑定用户
        $phoneCount = M('member')->where('phone != ""')->count();
        $this->assign('phoneCount', $phoneCount);

       
        $this->display();
    }



}