<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-25
 * 版    本：1.0.0
 * 功能说明：版主管理控制器。
 *
 **/ 

namespace Admin\Controller;

class ModeratorController extends ComController
{
    public function index()
    {
        $bm = M('moderator')->select();
        $this->assign('bm', $bm);
        $this->display();
    }

    public function del()
    {
        $ids = isset($_POST['ids']) ? $_POST['ids'] : false;
        $uids = isset($_POST['uids']) ? $_POST['uids'] : false;
        if (is_array($ids)) {
            foreach ($ids as $k => $v) {
                $ids[$k] = intval($v);
            }
            $ids = implode(',', $ids);
            $map['id'] = array('in', $ids);

            foreach ($uids as $k1 => $v1) {
                $uids[$k1] = intval($v1);
            }
            $uids = implode(',', $uids);
            $map1['uid'] = array('in', $uids);

            if (M('moderator')->where($map)->delete()) {

                M('auth_group_access')->data(array('group_id' => 9))->where($map1)->save();
                addlog('删除版主ID：' . $ids);

                $this->success('恭喜，版主删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }
    }

    public function add()
    {	
    	$cg = M('category')->field("id,name")->where(array("pid" => "0"))->select();
        $this->assign('cg', $cg);

        $member = M('member')->field('uid,user')->where("uid <> 1 and status = 0")->select();
        $this->assign('member', $member);

    	$this->display('form');
    }

    public function update()
    {

    	$cgid = I('post.pid/d');
    	if ($cgid == 0) {
    		$this->error('所属版块不能为空！');die;
    	}

    	$data['cgid'] = $cgid;

    	$cgname = M('category')->field('name')->where(array("id" => $cgid))->select();
    	$data['cgname'] = $cgname['0']['name'];

    	$uid = I('post.uid/d');
    	if (!$uid == null) {
    		$data['uid'] = $uid;
    		$username = M('member')->field('user')->where(array("uid" => $uid))->select();

    		if ($username) {
    			$data['username'] = $username['0']['user'];

    			M('moderator')->data($data)->add();
                M('auth_group_access')->data(array('group_id' => 10))->where("uid='$uid'")->save();
            	addlog('新增 '.$data['cgname'].' 版主');
            	$this->success('恭喜，新增版主成功！','index');
    		}else{
    			$this->error('对不起，该用户不存在！');
    		}
    	}
    }
}