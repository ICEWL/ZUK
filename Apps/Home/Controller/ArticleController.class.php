<?php
namespace Home\Controller;

class ArticleController extends ComController 
{
    public function article()
    {

        $this->display('Section/article');
    }
}