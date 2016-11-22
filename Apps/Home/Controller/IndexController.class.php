<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-16
 * 版    本：1.0.0
 * 功能说明：前台首页控制器。
 *
 **/

namespace Home\Controller;

use Vendor\Tree;

class IndexController extends ComController 
{
    public function index($sid = 0, $p = 1)
    {
        $article = M('article');

        $prefix = C('DB_PREFIX');  //获取表前缀
        $pagesize = 15;  //每页数量
        $offset = $pagesize * ($p - 1);  //计算记录偏移量
        $p = intval($p) > 0 ? $p : 1;
        $sid = isset($_GET['sid']) ? $_GET['sid'] : '';  //GET获取版块ID
        $where = "1=1 ";

        if ($sid) {
            $sids_array = category_get_sons($sid);
            $sids = implode(',',$sids_array);
            $where .= "and {$prefix}article.sid in ($sids) ";
        }

        // 按照点击量降序
        $orderby = "n desc";

        // 统计
        $count = $article->where($where)->count();

        // 帖子列表
        $lists = $article->field("{$prefix}article.*,{$prefix}category.name,{$prefix}member.user")
                        ->where($where)
                        ->order($orderby)
                        ->join("{$prefix}member on {$prefix}article.mid = {$prefix}member.uid" , 'left')
                        ->join("{$prefix}category on {$prefix}article.sid = {$prefix}category.id", 'left')
                        ->limit($offset . ',' . $pagesize)
                        ->select();

        foreach ($lists as $key => $v) {
            $v['total'] = '';
            $total = M('home_comment')->where("tid = $v[aid]")->count();// 回帖数
            $v['total'] = $total;
            if ($v['status']==0) {//过滤未审核帖子
                $list[]=$v;
            }
        }                
        $this->assign('list', $list);

        // 分页
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('page', $page);

        // 轮播图
        $slide = M('slide')->order('o asc')->select();
        $this->assign('slide', $slide);

        // 查询社区讨论菜单
        $indexcategory = M('index_category')->select();
        $this->assign('indexcategory', $indexcategory);

        // 友情链接
        $links = M('links')->order('o asc')->select();
        $this->assign('links', $links);
        
        $this->display();

    }

}