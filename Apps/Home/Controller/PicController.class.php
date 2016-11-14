<?php
namespace Home\Controller;
use Think\Controller;
class PicController extends Controller {
    public function index(){

        $this->display('Pic/index');
    }
}