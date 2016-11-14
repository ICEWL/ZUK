<?php
namespace Home\Controller;
use Think\Controller;
class ExchangeController extends Controller {
    public function index(){

        $this->display('Exchange/index');
    }
}