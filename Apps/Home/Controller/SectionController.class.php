<?php
namespace Home\Controller;
use Think\Controller;
class SectionController extends Controller {
    public function index(){

        $this->display('Section/index');
    }
}