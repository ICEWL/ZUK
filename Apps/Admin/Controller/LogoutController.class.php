<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-08
 * 版    本：1.0.0
 * 功能说明：后台注销控制器。
 *
 **/

namespace Admin\Controller;

class LogoutController extends ComController
{
    public function index()
    {
        cookie('auth', null);
        session('uid',null);
        $url = U("login/index");
        header("Location: {$url}");
        exit(0);
    }
}