<?php
namespace App\Controller;
use Base\Controller as BaseController;

class User extends BaseController
{
    public function indexAction()
    {
        $this->_render = false;
        $this->_jsonData = ['name' => 'Dima', 'id' => 123, 'data' => ['age' => 123]];
        $this->json();
    }

    public function loginAction()
    {
        $this->_render = false;
        echo __METHOD__;
    }

    public function registerAction()
    {
        $this->_render = false;
        echo __METHOD__;
    }
}