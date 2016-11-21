<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-21
 * 版    本：1.0.0
 * 功能说明：推荐阅读。
 *
 **/

namespace Admin\Controller;

class ReadController extends ComController
{

    public function index()
    {

        $list = M('read')->order('o asc')->select();
        $this->assign('list', $list);
        $this->display();
    }

    public function add()
    {

        $this->display('form');
    }

    public function edit($id = null)
    {

        $id = intval($id);
        $read = M('read')->where('id=' . $id)->find();
        $this->assign('read', $read);
        $this->display('form');
    }

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
            if (M('read')->where($map)->delete()) {
                addlog('删除推荐阅读，ID：' . $ids);
                $this->success('恭喜，删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }
    }

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
            M('read')->data($data)->where('id=' . $id)->save();
            addlog('修改推荐阅读，ID：' . $id);
        } else {
            M('read')->data($data)->add();
            addlog('新增推荐阅读');
        }

        $this->success('恭喜，操作成功！', U('index'));
    }
}