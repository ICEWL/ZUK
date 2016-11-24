<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-17
 * 版    本：1.0.0
 * 功能说明：前台版块控制器。
 *
 **/
namespace Home\Controller;

use Vendor\Tree;

class SectionController extends ComController 
{

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

        // 查询各版块信息
        foreach ($cgarr as $key => $v) {

            $v['total'] = '';
            $total = M('category')->table('zuk_category as cg,zuk_article as a')
                        ->where("cg.pid = $v[id] and a.sid = cg.id")
                        ->count();
            $v['total'] = $total;

            $v['todaytotal'] = '';
            $todaytotal = M('category')->table('zuk_category as cg,zuk_article as a')
                        ->where("cg.pid = $v[id] and a.sid = cg.id and a.t>$today and a.t<$endtoday")
                        ->count();
            $v['todaytotal'] = $todaytotal;

            if ($v['type']==0) {
                $arr['zuk'][]=$v;
            }

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

        $this->display();
    }

    public function themes($p = 1)
    {   

        $article = M('article');

        $pagesize = 8;  //每页数量
        $offset = $pagesize * ($p - 1);  //计算记录偏移量
        $p = intval($p) > 0 ? $p : 1;

        $prefix = C('DB_PREFIX');

        $sid = I('get.sid/d') ? I('get.sid/d') : '0';
        $cgid = I('get.cgid/d') ? I('get.cgid/d') : '0';

        $order = isset($_GET['order']) ? $_GET['order'] : 'DESC';

        $where = "{$prefix}article.status = 0 ";

        // 查询当前版块信息
        $arr = M('category')->where("id = $sid")->select();

        if ($arr) {

            // 获取当前版块子版块信息
            $category = M('category')->field('id,pid,name')->where("pid = $sid")->order('o asc')->select();

            //获取当前sid下的所有子栏目的id
            $sids_array = array_column($category, 'id');

            //将获取的子栏目id 拼接成字串
            $sids = implode(',',$sids_array);

            // 查询当前版块总贴数
            $totalpost = $article->where("sid in ($sids)")->count();

            // 统计今日新帖 
            $today = strtotime(date('Y-m-d', time())); // 当天的零点
            $endtoday = $today + 24 * 60 * 60; // 当天的24
            $condition = "t > $today and t<$endtoday and sid in ($sids)";
            $todayposts = total('article',$condition);

            $where .= "and {$prefix}article.sid in ($sids) ";

        } else {
            $errormessage = '抱歉，指定的版块不存在';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/notfound');
            die;
        }

        if ($cgid) {
            $where .= "and {$prefix}article.sid = $cgid";
        }
        
        //默认按照时间降序
        $filter = isset($_GET['filter']) ? $_GET['filter'] : ''; 
        if ($filter == "new") {
            $orderby = "t desc";
        }elseif ($filter == "hot") {
            $orderby = "n desc";
        }else{
            $orderby = "t desc";
        }

        // 查询帖子
        $lists = $article->field("{$prefix}article.*,{$prefix}category.name,{$prefix}member.user")->where($where)->order($orderby)->join("{$prefix}member on {$prefix}article.mid = {$prefix}member.uid" , 'left')->join("{$prefix}category on {$prefix}article.sid = {$prefix}category.id", 'left')->limit($offset . ',' . $pagesize)->select();

        foreach ($lists as $key => $v) {
            $v['total'] = '';
            $total = M('home_comment')->where("tid = $v[aid]")->count();// 回帖数
            $v['total'] = $total;
            if ($v['status']==0) {//过滤未审核帖子
                $list[]=$v;
            }
        }

        // 分页处理
        $count = $article->where($where)->count();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();


        $this->assign('category', $category);
        $this->assign('arr',$arr[0]);
        $this->assign('totalpost',$totalpost);
        $this->assign('todayposts',$todayposts);
        $this->assign('list', $list);
        $this->assign('page', $page);

        $this->display('themes');
    }

    public function article()
    {   
        $flag = $this->check_login();
        if (!$flag) {
            $errormessage = '没有权限在该版块发帖';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/error');
            die;
        }

        $sid = isset($_GET['sid']) ? $_GET['sid'] : '';
        $cgname = M('category')->where(array('id'=>$sid,'pid'=>'0'))->select();
        if (empty($cgname)) {
            $errormessage = '抱歉，指定的版块不存在';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/notfound');
            die;
        }
        $this->assign('cgname', $cgname['0']);

        $cgpid = $cgname['0']['id'];
        $cglist = M('category')->where(array('pid'=>$cgpid))->select();
        $this->assign('cglist', $cglist);

        $this->display('article');
    }



/**
 *
 * 版权所有：ICEWL
 * 作    者：Timothy<yleigg@163.com>
 * 日    期：2016-11-21
 * 版    本：1.0.0
 * 功能说明：前台帖子控制器。
 *
 **/

    // 发帖
    public function posts()
    {   
        $flag = $this->check_login();
        if (!$flag) {
            $errormessage = '没有权限在该版块发帖';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/error');
            die;
        }

        if (I('post.content')==null) {
           $this->error("发帖失败,内容不能为空");
        }

        $id = I('post.typeid');
        $pid = M('category')->where("id = $id")->select();
        $pid = $pid[0]['pid'];

        $sid=I('post.sid');
        $prefix = C('DB_PREFIX');
        $data['sid'] = I('post.typeid');
        $data['title'] = I('post.title');
        $data['content'] = I('post.content');
        $data['mid'] = I('session.uid');
        $data['t'] = time();       
        if(I('post.content')!=null){            
            $cid = M('article')->data($data)->add();
            $this->success("发帖成功！",U('themes',array('sid'=>$pid)));                
        }else{
            $this->error("发帖失败,内容不能为空");
        }

    }

    public function content($p = 1)
    {   
        $aid = I('get.aid/d') ? I('get.aid/d') : '0';
        $arr = M('article')->where("aid = $aid")->select();

        if ($arr) {

            // 查询帖子详情
            
            $arr = $arr['0'];
            $this->assign('arr', $arr);

            // 查询发帖人信息
            $uid = $arr['mid'];
            $postuser = M('member')->where("uid = $uid")->select();
            $postuser = $postuser['0'];
            

            // 统计用户发帖数
            $fatie = M('article')->where(array('mid' => $postuser['uid']))->count(); 
            $postuser['fatie'] = $fatie;
            // 统计用户回帖数
            $huitie = M('home_comment')->where(array('uid' => $postuser['uid']))->count();
            $postuser['huitie'] = $huitie;
            // 统计用户好友数
            $haoyou = M('home_friends')->where(array('uid' => $postuser['uid']))->count();
            $postuser['haoyou'] =$haoyou;

            $this->assign('postuser', $postuser);

            // 查询发帖人最近发的帖子
            $beenposts = M('article')->where(array('uid' => $postuser['uid']))->order('t desc')->limit('5')->select();
            $this->assign('beenposts', $beenposts);


            // 查询发帖人权限
            $groupid = M('auth_group_access')->field('group_id')->where("uid = $uid")->select();
            $groupid = $groupid['0']['group_id'];
            $grouptitle = M('auth_group')->field('title')->where("id = $groupid")->select();
            $grouptitle = $grouptitle['0'];
            $this->assign('grouptitle', $grouptitle);

            // 查询所属版块
            $sid = $arr['sid'];
            $cgpost = M('category')->field('id,pid,name')->where("id = $sid")->select();
            $cgpost = $cgpost['0'];
            $this->assign('cgpost', $cgpost);

            // 查询所属父版块
            $pid = $cgpost['pid'];
            $pcgpost = M('category')->field('name')->where("id = $pid")->select();
            $pcgpost = $pcgpost['0'];
            $this->assign('pcgpost', $pcgpost);

            $prefix = C('DB_PREFIX');

            // 设置分页信息
            $pagesize = 10;  //每页数量
            $offset = $pagesize * ($p - 1);  //计算记录偏移量
            $p = intval($p) > 0 ? $p : 1;

            $tid = I('get.aid');

            // 统计查询回贴数
            $countcritic = M('home_comment')->where("tid=$tid and authorid='0'")->count();
            $this->assign('countcritic', $countcritic);

            // 排序
            $filter = isset($_GET['order']) ? $_GET['order'] : ''; 
            if ($filter == "old") {
                $orderby = "t desc";
            }else{
                $orderby = "t asc";
            }

            //查询评论信息
            // $tid = I('get.aid');
            $critic =M('home_comment')->table("{$prefix}member m,{$prefix}home_comment h")->order($orderby)->where("m.uid=h.uid and h.tid=$tid and h.authorid='0'")->limit($offset . ',' . $pagesize)->select();
            $this->assign('critic', $critic);
   

            // 分页
            $page = new \Think\Page($countcritic, $pagesize);
            $page = $page->show();
            $this->assign('page', $page);

            //查询回复评论人信息
            $newarrs = array();
            foreach ($critic as $key => $val) {

                $reply =M('home_comment')->table("{$prefix}member m,{$prefix}home_comment h")->where("h.tid=$tid and m.uid=h.authorid and h.author=$val[cid]")->select();

                foreach ($reply as $key => $value) {

                    if ($key = $value['author']) {
                        $newarrs[$key][] = $value;
                    }                   
                }
            }
            $this->assign('newarrs', $newarrs);

            // 查询帖子被收藏数
            $countcollection = M('home_favorite')->where(array('tid'=>$arr['aid']))->count();
            $this->assign('countcollection', $countcollection);

        } else {
            $errormessage = '抱歉，指定的帖子不存在或已被删除或正在被审核';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/notfound');
            die;
        }
        
        $this->display('content');
    }


    
    // 快速评论
    public function fast() 
    {   
        $flag = $this->check_login();
        if (!$flag) {
            $errormessage = '没有权限发布回复！';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/error');
            die;
        }

        $aid = I('post.aid');
        $today = M('article')->field('mid')->where("aid = $aid")->select();
        $todays = array_column($today, 'mid');
        // var_dump($todays);
        $data['id'] = $todays[0];
        $data['message'] = $_POST['message'];
        $data['uid'] = I('session.uid');
        $data['tid'] = I('post.aid');
        $data['dateline'] = time();       
        if(I('post.message')!=null){            
                $cid = M('home_comment')->data($data)->add();
               $this->success("回复成功！",U('content',array('aid'=>$aid)));                
        }else{
            $this->error("回复失败,内容不能为空");
        }

    }


    // 回复
    public function fasta() 
    {   
        $flag = $this->check_login();
        if (!$flag) {
            $errormessage = '没有权限发布评论！';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/error');
            die;
        }
        $prefix = C('DB_PREFIX');
        $uid = I('post.uid');
        $tid = I('post.tid');
        $today = M('article')->field('mid')->where("aid = $tid")->select();
        $todays = array_column($today, 'mid');
        $data['id'] = $todays[0];
        $data['message'] = I('post.message');
        $data['uid'] = I('session.uid');
        $data['tid'] = $tid;
        $data['authorid'] = $uid;
        $data['author'] = I('post.cid');
        $data['dateline'] = time();       
        if(I('post.message')!=null){            
                $cid = M('home_comment')->data($data)->add();
               $this->success("评论成功！",U('content',array('aid'=>$tid)));                
        }else{
            $this->error("评论失败,内容不能为空");
        }

    }


    // 收藏按钮
    public function zan(){

        $flag = $this->check_login();
        if (!$flag) {
            $errormessage = '不能收藏哦！';
            $this->assign('errormessage', $errormessage);
            $this->display('Public/error');
            die;
        }


        $tid=isset($_POST['aid'])?intval(trim($_POST['aid'])):0;
        $data['tid'] = $tid;
        $data['uid']=I('session.uid');
        $uid = $_SESSION['uid'];
        $data['dateline'] = time(); 
        $data['favtitle'] = $_POST['title']; 

 
        $flag = M("home_favorite")->where(array('tid'=>$tid,'uid'=>$uid))->find();
    
        if(!$flag){       
            M("home_favorite")->data($data)->add();
            $data['info'] = "ok";
            $data['status'] = 1;
            $this->ajaxReturn($data);
            exit();
        }else{
            $data['info'] = "fail";
            $data['status'] = 0;
            $this->ajaxReturn($data);
            exit();     
             }
    }



}