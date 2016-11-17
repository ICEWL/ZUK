<?php
namespace Home\Controller;

class MyController extends ComController 
{
    public function post()
    {

        $this->display('post');
    }


     public function friends()
    {

        $this->display('friends');
    }


     public function collection()
    {

        $this->display('collection');
    }


     public function mygold()
    {

        $this->display('mygold');
    }

         public function record()
    {

        $this->display('record');
    }

             public function winning()
    {

        $this->display('winning');
    }





}