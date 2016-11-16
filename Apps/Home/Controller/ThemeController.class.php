<?php
namespace Home\Controller;

class ThemeController extends ComController 
{
    public function theme()
    {

        $this->display('Public/theme');
    }
}