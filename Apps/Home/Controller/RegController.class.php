<?php
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {

    public function index(){

        $this->display('Reg/index');
    }
    /** 
 *  
 * 验证码生成 
 */  
public function verify_c(){  
    $Verify = new \Think\Verify();  
    $Verify->fontSize = 18;  
    $Verify->length   = 1;  
    $Verify->useNoise = false;  
    $Verify->codeSet = '0123456789';  
    $Verify->imageW = 130;  
    $Verify->imageH = 50;  
    //$Verify->expire = 600;  
    $Verify->entry();  
}
function check_verify($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

  public function reg()
    {
        // var_dump($_SESSION);
       $verify = I('param.verify','');  
if(!$this->check_verify($verify)){
    $this->error("亲，验证码输错了哦！",$this->site_url,9);  
} 
        }


  
}
