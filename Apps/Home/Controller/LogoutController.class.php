<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：Timothy<yleigg@163.com>
 * 日    期：2016-11-26
 * 版    本：1.0.0
 * 功能说明：前台注销控制器。
 *
 **/

namespace Home\Controller;

class LogoutController extends ComController
{
    public function index()
    {
        cookie('auth', null);
        session('uid',null);
        sleep(1);
        $url = U("Index/index");
        header("Location: {$url}");
        exit(0);
    }
}   