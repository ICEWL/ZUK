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

use Think\Controller;

class ComController extends Controller
{

    public function _initialize()
    {
        C(setting());
        
    }
}