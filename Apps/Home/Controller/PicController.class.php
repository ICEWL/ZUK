<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：Timothy<yleigg@163.com>
 * 日    期：2016-11-26
 * 版    本：1.0.0
 * 功能说明：前台趣摄阁控制器。
 *
 **/
namespace Home\Controller;

class PicController extends ComController 
{
    public function index()
    {	

    	// 查询趣摄阁子版块
    	$sonscg = M('category')->where(array('pid' => '55'))->limit('6')->select();
    	$this->assign('sonscg',$sonscg);
    	
    	// 查询趣摄阁帖子
    	$id = I('get.id/d') ? I('get.id/d') : '0';
    	if ($id == '0') {

    		//获取当前趣摄阁下的所有子栏目的id
    		$sids_array = array_column($sonscg, 'id');

    		//将获取的子栏目id 拼接成字串
            $sids = implode(',',$sids_array);

            $picposts = M('article')->where("sid in ($sids)")->select();

    	}else{
    		$picposts = M('article')->where(array('sid' => $id))->select();
    	}
    	$this->assign('picposts',$picposts);

    	// var_dump($picposts);


        $this->display('Pic/index');
    }
}