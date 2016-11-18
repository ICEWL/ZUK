<?php
/**
 *
 * 版权所有：ICEWL
 * 作    者：shineky<shineky7@163.com>
 * 日    期：2016-11-08
 * 版    本：1.0.0
 * 功能说明：网站设置控制器。
 *
 **/

namespace Admin\Controller;

class SettingController extends ComController
{
    public function setting()
    {   
        $logo = M('setting')->field('v')->where("k =  'logo' ")->select();
        $logo = $logo['0']['v'];
        $this->assign('logo', $logo);
        // var_dump($logo);die;
        $this->display();
    }

    public function update()
    {

        $data = $_POST;
        $logo = I('post.logo', '', 'strip_tags');
        if ($logo <> '') {
            $data['logo'] = $logo;
        }
        $data['sitename'] = isset($_POST['sitename']) ? strip_tags($_POST['sitename']) : '';
        $data['title'] = isset($_POST['title']) ? strip_tags($_POST['title']) : '';
        $data['keywords'] = isset($_POST['keywords']) ? strip_tags($_POST['keywords']) : '';
        $data['description'] = isset($_POST['description']) ? strip_tags($_POST['description']) : '';
        $Model = M('setting');
        foreach ($data as $k => $v) {
            $Model->data(array('v' => $v))->where("k='{$k}'")->save();
        }
        //清除旧的缓存数据
        $cache = \Think\Cache::getInstance();
        $cache->clear();
        addlog('修改网站配置。');
        $this->success('恭喜，网站配置成功！');
    }
}