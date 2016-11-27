<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-15
 * 版    本：1.0.0
 * 功能说明：系统消息控制器。
 *
 **/

namespace Admin\Controller;

use Vendor\Tree;

class MessageController extends ComController
{

	public function index($p = 1)
	{	
		$p = intval($p) > 0 ? $p : 1;

        $message = M('home_notification');
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $prefix = C('DB_PREFIX');

        $where = "1 = 1 and {$prefix}home_notification.type = 'doing' ";

        $count = $message->where($where)->group("{$prefix}home_notification.dateline")->count();

        $list = $message->where($where)->order("{$prefix}home_notification.dateline desc")->limit($offset . ',' . $pagesize)->group("{$prefix}home_notification.dateline")->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();

		$this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();

	}


	public function del()
    {

        $aids = isset($_REQUEST['aids']) ? $_REQUEST['aids'] : false;
        if ($aids) {
            if (is_array($aids)) {
                $aids = implode(',', $aids);
                $map['id'] = array('in', $aids);
            } else {
                $map = 'id=' . $aids;
            }
            $arr = M('home_notification')->field('dateline')->where($map)->select();

            foreach ($arr as $v) {
            	$arrs[] = $v['dateline'];
            }

            if ($arrs) {
            	if (is_array($arrs)) {
            		$arrs = implode(',', $arrs);
                	$data['dateline'] = array('in', $arrs);
            	}else{
            		$data = 'dateline=' . $arrs;
            	}
            }
            // var_dump($data);die;

            if (M('home_notification')->where($data)->delete()) {
                addlog('删除系统消息');
                $this->success('恭喜，系统消息删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }

    }

    public function add()
    {
        $this->display('form');
    }


    public function update()
    {	
    	
    	$arr['note'] = isset($_POST['content']) ? $_POST['content'] : false;
	    $arr['type'] = 'doing';
		$arr['author'] = '系统消息';
	    $arr['authorid'] = I('session.uid');
	    $arr['dateline'] = time();
		// var_dump($data);die;
	    
    	// 查询所有用户
   		$members = M('member')->field('uid')->select();

   		// 数据重组
   		foreach ($members as $k => $v) {
   			$arr[] = $v['uid'];
   			foreach ($arr as $key => $value) {
   				$data[$k]['uid'] = $value;
   				$data[$k]['note'] = $arr['note'];
   				$data[$k]['type'] = $arr['type'];
   				$data[$k]['author'] = $arr['author'];
   				$data[$k]['authorid'] = $arr['authorid'];
   				$data[$k]['dateline'] = $arr['dateline'];
   			}
   		}
   		// var_dump($data);die;
    	

    	$m = M('home_notification')->addAll($data);
    	if ($m) {
    		$this->success('发布成功！');
    	}
    }

}