<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-24
 * 版    本：1.0.0
 * 功能说明：积分头衔管理控制器。
 *
 **/ 
namespace Admin\Controller;

class ExpController extends ComController
{

    public function index()
    {	
    	$score = M('score')->order('jid asc')->select();

    	foreach ($score as $k => $v) {
    		$min[] = $v['min'];
    		$honor[] = $v['honor'];
    	}

    	$j_arr = [];
    	$j_arr['min'] = implode("|", $min);
    	$j_arr['honor'] = implode("|", $honor);

    	$this->assign('j_arr', $j_arr);

        $this->display();
    }

    public function update()
    {	

    	$jf = I('post.jf');
    	$tx = I('post.tx');

    	$min = explode("|", $jf);
    	$honor = explode("|", $tx);

    	foreach ($min as $k => $v) {
			foreach ($honor as $k2 => $v2) {
				if($k == $k2){
					$k2 += 1;
					$arr[$k]['jid'] = $k2;
					$arr[$k]['min'] = $v;
					$arr[$k]['honor'] = $v2;
				}
			}
		}

		var_dump($arr);

	    foreach ($arr as $k => $v) {
	    	if ($k < 9) {
	    		$score = M('score')->where(array("jid" => $v['jid']))->data($v)->save();
	    	}
	    }
	    
	    if ($score) {
    		$this->success('设置成功！');
	    }
    	
    }
    
}