<?php
namespace Home\Controller;

class MyController extends ComController 
{
    public function posts()
    {

        $this->display('posts');
    }


     public function friends()
    {

        $this->display('friends');
    }


     public function collection()
    {

        $this->display('collection');
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