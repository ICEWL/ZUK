<?php
namespace Home\Controller;
use Think\Controller;
class ThemeController extends Controller {
    public function theme(){

        $this->display('Public/theme');
    }
}