<?php

namespace Home\Controller;
//use Think\Controller;
class IntegralController extends ComController
{
   private $uid = null;
   private $where = array();
   /**
    * 构造方法
    * 自动加载uid,初始化uid条件
    */
   public function _initialize()
   {
      $this -> uid = $this -> check_login();
      $this -> where['uid'] = $this->uid;
   }
 
   /**
    * 签到获得积分方法
    */
   public function sign_in()
   {
      // var_dump($_SESSION['uid']);
      $get_integral = 20; //签到赠送积分
      $get_added_integral = 500; //连续签到N天额外赠送积分
      $continuous_day = 7; //连续签到多少天可领额外积分
      //**************************************************************
      $start_time = strtotime(date('Y-m-d'));//今天凌晨的时间戳
      $year = date("Y"); //今天-年
      $month = date("m"); //今天-月
      $day = date("d"); //今天-日
      //**************************************************************
      $yesterday = strtotime('-1 day'); //昨天的时间戳基数
      $yesterday_year = date('Y',$yesterday); //昨天-年
      $yesterday_month = date('m',$yesterday); //昨天-月
      $yesterday_day = date('d',$yesterday); //昨天-日
      //**************************************************************
      //先验证今天有没有签到过
      $Model = M('user_sign_in');
      $record_count = $Model -> where(array('uid'=>$this->uid,'create_time'=>array('EGT',$start_time))) -> count();
      if($record_count)
         $this -> error('老司机别贪心今日已经签到了');
      //**************************************************************
      //准备好插入数据
      $data = array(
         'uid' => $this -> uid,
         'sign_in_year' => $year, //年
         'sign_in_month' => $month,//月
         'sign_in_day' => $day,//日
         'username' => $_SESSION['uid'],
         'get_integral' => $get_integral, //默认签到获得积分
         'create_time' => time(),
      );
      $msg = "签到成功,获得{$get_integral}积分";
   
      //**************************************************************
      //查询昨天的签到纪录
      $where = array(
         'uid' => $this -> uid,
         'sign_in_year' => $yesterday_year,
         'sign_in_month' => $yesterday_month,
         'sign_in_day' => $yesterday_day,
      );
      $yesterday_record = $Model -> where($where) -> find();
      //有，设置连续签到天数加1,继续判断连续签到有没有达标
      if($yesterday_record){
         //设置连续签到天数加1
         $data['sign_in_con_days'] = $yesterday_record['sign_in_con_days'] +1;
         if($yesterday_record['sign_in_con_days'] >= $continuous_day){
            //已 经达到连续签到要求，加送额外积分
            $data['get_integral'] = $get_integral + $get_added_integral;
            $msg = "签到成功,获得{$get_integral}积分,连续签到{$continuous_day}天额外获得{$get_added_integral}积分";
         }
      }
      //**************************************************************
      //昨日没有签到，不进行逻辑处理，执行签到送积分，默认连续签到天数为1
      if($Model -> add($data)){
         //用户积分增加
         M('user_credit') -> where($this->where) -> setInc('credit',$data['get_integral']);
         $this -> success($msg,U('Index/index'),3);
      }else{
      $this - error('签到失败');}
   }










   /**
 * 登录导航
 * 验证今日是否已签到
 */
public function login_nav(){
   $start_time = strtotime(date('Y-m-d'));//今天凌晨的时间戳
   $is_sign_in = 0;//初始化未签到
   //先验证今天有没有签到过
   $Model = M('user_sign_in');
   //签到纪录
   $sign_in_record = $Model -> where(array('uid'=>$_SESSION['uid'],'create_time'=>array('EGT',$start_time))) -> find();
   if($sign_in_record){
      $is_sign_in = 1;
      //根据需要传入 $sign_in_record 或连续签到天数
      $this -> assign('sign_in_con_days',$sign_in_record['sign_in_con_days']);
   }
   $this -> assign('is_sign_in',$is_sign_in);
   //自用
   $this->display('Widget/login_nav');
}





}
 