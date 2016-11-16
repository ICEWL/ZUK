<?php
namespace Home\Controller;

class ErrorController extends ComController 
{
    public function error()
    {

        $this->display('Public/error');
    }
}