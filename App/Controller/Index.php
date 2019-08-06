<?php
namespace App\Controller;
use Base\Controller as BaseController;

class Index extends BaseController
{
    /** @var View */
    public $view;

    public function preAction()
    {
        $this->view->userModel = new \App\Model\modelUser();
    }

    public function indexAction()
    {
        $this->view->userModel = new \App\Model\modelUser();
    }

    public function mainAction()
    {
        echo 'main';
    }

    function userProfileAction()
    {

    }
}