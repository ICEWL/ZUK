<?php
namespace Home\Controller;

class IndexController extends ComController 
{
    public function index()
    {	
        $this->display('Index/index');
    }

}