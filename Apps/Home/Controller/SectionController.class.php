<?php
namespace Home\Controller;

use Vendor\Tree;

class SectionController extends ComController {
    public function index()
    {	
    	// 总贴数
    	$poststotal = total('article');

    	// 当天的零点
		$today = strtotime(date('Y-m-d', time())); 

		// 昨天的零点
		$yesterday = $today - 24 * 60 * 60; 

		// 当天的24
		$endtoday = $today + 24 * 60 * 60; 
		
		// 统计昨日新贴
		$ycondition = "t > $yesterday and t<$today";
		$yesterdayposts = total('article',$ycondition);

		// 统计今日新帖
		$condition = "t > $today and t<$endtoday";
		$todayposts = total('article',$condition);


    	// 统计会员总数
    	$usertotal = total('member');

    	$cgarr = M('category')->where('pid = 0')->order('o asc')->select();

    	foreach ($cgarr as $k => $v) {
    		if ($v['type']==0) {
    			$arr['zuk'][]=$v;
    		}
    	}

    	foreach ($cgarr as $k => $v) {
    		if ($v['type']==0) {
    			
    		}elseif($v['type']==1){
    			$arrs['Moto专区'][]=$v;
    		}elseif($v['type']==2){
    			$arrs['粉丝广场'][]=$v;
    		}else{
    			$arrs['站务大厅'][]=$v;
    		}
    	}
    	
        $this->assign('yesterdayposts',$yesterdayposts);
        $this->assign('todayposts',$todayposts);
        $this->assign('poststotal',$poststotal);
        $this->assign('usertotal',$usertotal);

        $this->assign('Section',$arr);
        $this->assign('Sections', $arrs);

        $this->display('Section/index');
    }
}