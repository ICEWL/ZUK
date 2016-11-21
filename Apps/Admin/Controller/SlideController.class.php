<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-20
 * 版    本：1.0.0
 * 功能说明：轮播图。
 *
 **/

namespace Admin\Controller;

class SlideController extends ComController
{

    //轮播图
    public function index()
    {

        $list = M('slide')->order('o asc')->select();
        $this->assign('list', $list);
        $this->display();
    }

    //新增轮播图
    public function add()
    {

        $this->display('form');
    }

    //修改轮播图
    public function edit($id = null)
    {

        $id = intval($id);
        $slide = M('slide')->where('id=' . $id)->find();
        $this->assign('slide', $slide);
        $this->display('form');
    }

    //删除轮播图
    public function del()
    {

        $ids = isset($_REQUEST['ids']) ? $_REQUEST['ids'] : false;
        if ($ids) {
            if (is_array($ids)) {
                $ids = implode(',', $ids);
                $map['id'] = array('in', $ids);
            } else {
                $map = 'id=' . $ids;
            }
            if (M('slide')->where($map)->delete()) {
                addlog('删除焦点图，ID：' . $ids);
                $this->success('恭喜，删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }
    }

    //保存轮播图
    public function update($id = 0)
    {
        $id = intval($id);
        $data['title'] = I('post.title', '', 'strip_tags');
        if (!$data['title']) {
            $this->error('请填写标题！');
        }
        $data['url'] = I('post.url', '', 'strip_tags');
        $data['o'] = I('post.o', '', 'strip_tags');
        $data['pic'] = I('post.pic', '', 'strip_tags');
        if ($data['pic'] == '') {
            $this->error('请上传图片！');
        }
        if ($id) {
            M('slide')->data($data)->where('id=' . $id)->save();
            addlog('修改焦点图，ID：' . $id);
        } else {
            M('slide')->data($data)->add();
            addlog('新增焦点图');
        }

        $this->success('恭喜，操作成功！', U('index'));
    }
}