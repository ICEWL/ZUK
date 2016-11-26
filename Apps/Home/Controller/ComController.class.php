<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-15
 * 版    本：1.0.0
 * 功能说明：前台公共控制器。
 *
 **/
namespace Home\Controller;

use Common\Controller\BaseController;
use Think\Auth;

class ComController extends BaseController
{
    
    public $USER;

    public function _initialize()
    {
        C(setting()); 
        // var_dump($a);
        if (!C("COOKIE_SALT")) {
            $this->error('请配置COOKIE_SALT信息');
        }

        // 查询登录用户信息
        $user = '';
        $UID = I('session.uid/d');
        if ($UID) {
            // 用户基本信息
            $user = M('Member')->where(array('uid' => $UID))->find(); 
            // 统计用户发帖数
            $countuposts = M('article')->where(array('mid' => $UID))->count(); 
            $user['countuposts'] = $countuposts;
            // 统计用户收藏帖子数
            $countfavorite = M('home_favorite')->where(array('uid' => $UID))->count();
            $user['countfavorite'] = $countfavorite;
            // 统计用户好友数
            $countufriends = M('home_friends')->where(array('uid' => $UID))->count();
            $user['countufriends'] =$countufriends;

            // 查询用户积分
            $countcredit = M('user_credit')->field('credit')->where(array('uid' => $UID))->select();
            $user['countcredit'] = $countcredit['0']['credit'];

            // 查询用户通知
            $news = M('home_notification')->where(array('uid' => $UID,'new' => 1))->count();
            $this->assign('news',$news);

            // 查询用户头衔
            $score = M('score')->order('jid asc')->select();
            $this->assign('score', $score);

            foreach ($score as $k => $v) {
                $min[] = $v['min'];
                $honor[] = $v['honor'];
            }

            $rank = $countcredit['0']['credit'];
            $this->assign('rank', $rank);

            if ($rank >= $min['0'] and $rank <= $min['1']) {
                $user['score'] = $honor['0'];
            }elseif ($rank > $min['1'] and $rank <= $min['2']) {
                $user['score'] = $honor['1'];
            }elseif ($rank > $min['2'] and $rank <= $min['3']) {
                $user['score'] = $honor['2'];
            }elseif ($rank > $min['3'] and $rank <= $min['4']) {
                $user['score'] = $honor['3'];
            }elseif ($rank > $min['4'] and $rank <= $min['5']) {
                $user['score'] = $honor['4'];
            }elseif ($rank > $min['5'] and $rank <= $min['6']) {
                $user['score'] = $honor['5'];
            }elseif ($rank > $min['6'] and $rank <= $min['7']) {
                $user['score'] = $honor['6'];
            }elseif ($rank > $min['7'] and $rank <= $min['8']) {
                $user['score'] = $honor['7'];
            }else{
                $user['score'] = $honor['8'];
            }
            
        }
        $this->assign('user', $user);
        

        // 推荐阅读
        $read = M('read')->limit(3)->order('o asc')->select();
        $this->assign('read', $read);

        // 全民话题
        $topic = M('article')->where(array('sid' => 137))->limit(1)->order('t asc')->select();
        $ft = explode('：',$topic['0']['title']); 
        $topic['0']['title'] = $ft['1'];
        $this->assign('topic', $topic['0']);

        // 快速入口
        $CGARR = M('category')->where('pid = 0')->order('o asc')->select();
        foreach ($CGARR as $k => $v) {
            if ($v['type']==0) {
                $arrs['zuk'][]=$v;
            }elseif($v['type']==1){
                $arrs['Moto专区'][]=$v;
            }elseif($v['type']==2){
                $arrs['粉丝广场'][]=$v;
            }else{
                $arrs['站务大厅'][]=$v;
            }
        }
        $this->assign('arrs', $arrs);

        // 获取当前控制器名称
        $CNAME = CONTROLLER_NAME;
        $this->assign('CNAME', $CNAME);

        // 获取当前操作名称
        $ANAME = ACTION_NAME;
        $this->assign('ANAME', $ANAME);

    }

    public function check_login()
    {
        $flag = false;

        $salt = C("COOKIE_SALT");
        $ip = get_client_ip();
        $ua = $_SERVER['HTTP_USER_AGENT'];

        $auth = cookie('auth');

        $uid = session('uid');

        if ($uid) {
            $user = M('member')->where(array('uid' => $uid))->find();

            if ($user) {
                if ($auth ==  password($uid.$user['user'].$ip.$ua.$salt)) {
                    $flag = true;
                    $this->USER = $user;
                }
            }
        }
        return $flag;
    }

}