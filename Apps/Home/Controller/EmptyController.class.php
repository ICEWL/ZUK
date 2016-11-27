<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-08
 * 版    本：1.0.0
 * 功能说明：空控制器处理控制器。
 *
 **/ 
namespace Home\Controller;
use \Think\Controller;

class EmptyController extends Controller
{
    public function _empty($name)
    {
        // echo '<h1>空控制器 404</h1>';
        $this->display('Public/404');
    }
}