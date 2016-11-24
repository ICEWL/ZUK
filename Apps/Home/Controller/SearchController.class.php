<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-24
 * 版    本：1.0.0
 * 功能说明：搜索控制器。
 *
 **/

namespace Home\Controller;

use Vendor\Tree;

class SearchController extends ComController 
{
    public function index($p = 1)
    {
    	$this->display();
    }

}