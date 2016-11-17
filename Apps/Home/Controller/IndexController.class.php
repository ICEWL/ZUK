<?php
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
        $where = "{$prefix}article.status = 0 ";  //过滤未审核帖子

        if ($sid) {
            $sids_array = category_get_sons($sid);
            $sids = implode(',',$sids_array);
            $where .= "and {$prefix}article.sid in ($sids) ";
        }
        
        $orderby = "t desc";  //默认按照时间降序

        $count = $article->where($where)->count();

        $list = $article->field("{$prefix}article.*,{$prefix}category.name,{$prefix}member.user")->where($where)->order($orderby)->join("{$prefix}member on {$prefix}article.mid = {$prefix}member.uid" , 'left')->join("{$prefix}category on {$prefix}article.sid = {$prefix}category.id", 'left')->limit($offset . ',' . $pagesize)->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();

        // 查询社区讨论菜单
        $indexcategory = M('index_category')->select();

        $this->assign('indexcategory', $indexcategory);
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

}