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
namespace Home\Controller;

use Vendor\Tree;

class CgmanageController extends ComController 
{

	public function index($p = 1)
	{	
		
		// 检测是否登录
		$flag = $this->check_login();
        if (!$flag) {
            $errormessage = '骚年，不要搞事哦！';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/error');
            die;
        }

        // 登录用户ID
		$uid = I('session.uid');

		// 当前版块ID
		$sid = I('get.sid/d') ? I('get.sid/d') : '0';
		$this->assign('sid', $sid);

		// 查询是否当前版块版主
		$bmuser = M('moderator')->where(array("uid" => $uid , "cgid" => $sid))->select();
		
		if ($bmuser) {
			
			$article = M('article');

	        $pagesize = 8;  //每页数量
	        $offset = $pagesize * ($p - 1);  //计算记录偏移量
	        $p = intval($p) > 0 ? $p : 1;

	        $prefix = C('DB_PREFIX');

	        $orderby = " t desc";

	        // 帖子状态
	        $where = "{$prefix}article.status = 0 ";
	        $status = I('get.status/d');
	        if ($status == '1') {
	        	$where = "{$prefix}article.status = 1 ";
	        }

	        // 获取当前版块子版块信息
            $category = M('category')->field('id,pid,name')->where("pid = $sid")->order('o asc')->select();

            //获取当前sid下的所有子栏目的id
            $sids_array = array_column($category, 'id');

            //将获取的子栏目id 拼接成字串
            $sids = implode(',',$sids_array);

            $where .= "and {$prefix}article.sid in ($sids) ";

            // 查询帖子
        	$lists = $article->field("{$prefix}article.*,{$prefix}category.name,{$prefix}member.user")->where($where)->order($orderby)->join("{$prefix}member on {$prefix}article.mid = {$prefix}member.uid" , 'left')->join("{$prefix}category on {$prefix}article.sid = {$prefix}category.id", 'left')->limit($offset . ',' . $pagesize)->select();

        	// var_dump($lists);

        	// 分页处理
	        $count = $article->where($where)->count();
	        $page = new \Think\Page($count, $pagesize);
	        $page = $page->show();

	        $this->assign('lists', $lists);
        	$this->assign('page', $page);

		} else {
            $errormessage = '抱歉，您不是当前版块的版主哦！';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/notfound');
            die;
        }

		$this->display();
	}

	public function update()
	{
		

		$aids = isset($_REQUEST['aids']) ? $_REQUEST['aids'] : false;

		$status = I('post.delsubmit');

        if ($aids) {
            if (is_array($aids)) {
                $aids = implode(',', $aids);
                $map['aid'] = array('in', $aids);
            } else {
                $map = 'aid=' . $aids;
            }

            if ($status == 'true') {
            	$data['status'] = 0;
            }else{
            	$data['status'] = 1;
            }
            
            if (M('article')->data($data)->where($map)->save()) {
                $this->success('恭喜，操作成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }
	}
}