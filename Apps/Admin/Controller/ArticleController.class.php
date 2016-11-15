<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-15
 * 版    本：1.0.0
 * 功能说明：帖子管理控制器。
 *
 **/

namespace Admin\Controller;

use Vendor\Tree;

class ArticleController extends ComController
{

    public function index($sid = 0, $p = 1)
    {


        $p = intval($p) > 0 ? $p : 1;

        $article = M('article');
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $prefix = C('DB_PREFIX');
        $sid = isset($_GET['sid']) ? $_GET['sid'] : '';
        $keyword = isset($_GET['keyword']) ? htmlentities($_GET['keyword']) : '';
        $order = isset($_GET['order']) ? $_GET['order'] : 'DESC';
        $where = '1 = 1 ';
        if ($sid) {
            $sids_array = category_get_sons($sid);
            $sids = implode(',',$sids_array);
            $where .= "and {$prefix}article.sid in ($sids) ";
        }
        if ($keyword) {
            $where .= "and {$prefix}article.title like '%{$keyword}%' ";
        }
        //默认按照时间降序
        $orderby = "t desc";
        if ($order == "asc") {

            $orderby = "t asc";
        }
        //获取栏目分类
        $category = M('category')->field('id,pid,name')->order('o asc')->select();
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, $sid);
        $this->assign('category', $category);//导航


        $count = $article->where($where)->count();
        $list = $article->field("{$prefix}article.*,{$prefix}category.name")->where($where)->order($orderby)->join("{$prefix}category ON {$prefix}category.id = {$prefix}article.sid")->limit($offset . ',' . $pagesize)->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    public function add()
    {

        $category = M('category')->field('id,pid,name')->order('o asc')->select();
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, 0);
        $this->assign('category', $category);//导航
        $this->display('form');
    }

    public function del()
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
                addlog('删除帖子，AID：' . $aids);
                $this->success('恭喜，帖子删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }

    }

    public function edit($aid)
    {

        $aid = intval($aid);
        $article = M('article')->where('aid=' . $aid)->find();
        if ($article) {
            $category = M('category')->field('id,pid,name')->order('o asc')->select();
            $tree = new Tree($category);
            $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
            $category = $tree->get_tree(0, $str, $article['sid']);
            $this->assign('category', $category);//导航

            $this->assign('article', $article);
        } else {
            $this->error('参数错误！');
        }
        $this->display('form');
    }

    public function update($aid = 0)
    {

        $aid = intval($aid);
        $data['sid'] = isset($_POST['sid']) ? intval($_POST['sid']) : 0;
        $data['title'] = isset($_POST['title']) ? $_POST['title'] : false;
        $data['keywords'] = I('post.keywords', '', 'strip_tags');
        $data['content'] = isset($_POST['content']) ? $_POST['content'] : false;
        $data['thumbnail'] = I('post.thumbnail', '', 'strip_tags');
        $data['t'] = time();
        $data['mid'] = I('session.uid/d');

        if (!$data['sid'] or !$data['title'] or !$data['content']) {
            $this->error('警告！帖子版块、帖子标题及帖子内容为必填项目。');
        }

        if ($aid) {
            M('article')->data($data)->where('aid=' . $aid)->save();
            addlog('编辑帖子，AID：' . $aid);
            $this->success('恭喜！帖子编辑成功！');
        } else {
            $aid = M('article')->data($data)->add();
            if ($aid) {
                addlog('新增帖子，AID：' . $aid);
                $this->success('恭喜！帖子新增成功！');
            } else {
                $this->error('抱歉，未知错误！');
            }
        }
    }
}