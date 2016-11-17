<?php
namespace Home\Controller;

class SpaceController extends ComController 
{
    public function dynamic()
    {

        $this->display('dynamic');
    }


     public function theme()
    {

        $this->display('theme');
    }


     public function collecion()
    {

        $this->display('collection');
    }


     public function information()
    {

        $this->display('information');
    }

         public function friends()
    {

        $this->display('friends');
    }
}