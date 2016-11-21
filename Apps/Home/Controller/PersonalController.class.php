<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-21
 * 版    本：1.0.0
 * 功能说明：个人资料控制器。
 *
 **/
namespace Home\Controller;

class PersonalController extends ComController 
{   

    public function basic()
    {
        $this->display('basic');
    }


    public function address()
    {

        $this->display('address');
    }


    public function modifypass()
    {

        $this->display('modifypass');
    }


    public function modifypic()
    {

        $this->display('modifypic');
    }












    
}