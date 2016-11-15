<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-14
 * 版    本：1.0.0
 * 功能说明：版块管理控制器。
 *
 **/

namespace Admin\Controller;

use Vendor\Tree;

class CategoryController extends ComController
{

    public function index()
    {
        $category = M('category')->field('id,pid,name,title,cgicon,o')->order('o asc')->select();
        $category = $this->getMenu($category);
        $this->assign('category', $category);
        $this->display();
    }

    public function del()
    {

       if (empty($_GET['id'])) {
            $this->redirect('Admin/Category/index');
            exit;
        }

        $id = I('get.id/d');

        $category = M('category');

        if ($category->where('pid=' . $id)->count()) {
            $this->error('存在子版块，严禁删除。');
        }

        if ($category->delete($id) > 0)  {
            addlog('删除版块，ID：' . $id);
            $this->success('恭喜，版块删除成功！'); 
        }else {
            $this->error('参数错误！');
        }

    }

    public function edit()
    {

        $id = isset($_GET['id']) ? intval($_GET['id']) : false;
        $currentcategory = M('category')->where('id=' . $id)->find();
        $this->assign('currentcategory', $currentcategory);

        $category = M('category')->field('id,pid,name')->where("id <> {$id}")->order('o asc')->select();
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, $currentcategory['pid']);
        $this->assign('category', $category);
        $this->display('form');
    }

    public function add()
    {

        $pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0;
        $where = 'pid=0'; //限制只遍历顶级栏目
        $category = M('category')->field('id,pid,name')->where($where)->order('o asc')->select();
        // var_dump($category);die;
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, $pid);

        $this->assign('category', $category);
        $this->display('form');
    }

    public function update($act = null)
    {
        if ($act == 'order') {
            $id = I('post.id', 0, 'intval');
            if (!$id) {
                die('0');
            }
            $o = I('post.o', 0, 'intval');
            M('category')->data(array('o' => $o))->where("id='{$id}'")->save();
            addlog('版块修改排序，ID：' . $id);
            die('1');
        }

        $id = I('post.id', false, 'intval');
        $cgicon = I('post.cgicon', '', 'strip_tags');

        $data['type'] = I('post.type', 0, 'intval');
        $data['pid'] = I('post.pid', 0, 'intval');
        $data['name'] = I('post.name');
        $data['title'] = I('post.title', '', 'htmlspecialchars');
        $data['cgicon'] = $cgicon ? $cgicon : '';
        $data['description'] = I('post.description', '', 'htmlspecialchars');
        $data['o'] = I('post.o', 0, 'intval');
        if ($data['name'] == '') {
            $this->error('版块名称不能为空！');
        }
        if ($id) {
            if (M('category')->data($data)->where('id=' . $id)->save()) {
                addlog('版块分类修改，ID：' . $id . '，名称：' . $data['name']);
                $this->success('恭喜，版块修改成功！');
                die(0);
            }
        } else {
            $id = M('category')->data($data)->add();
            if ($id) {
                addlog('新增版块，ID：' . $id . '，名称：' . $data['name']);
                $this->success('恭喜，新增版块成功！', 'index');
                die(0);
            }
        }
        $this->success('恭喜，操作成功！');
    }
}