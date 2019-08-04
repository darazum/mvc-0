<?php

//var_dump($_SERVER);
$parts = explode('/', $_SERVER['REQUEST_URI']);

//var_dump($parts);
$controllerName = $parts[1];
$actionName = $parts[2];

$controllerFileName = ucfirst($controllerName);
include "Controller/$controllerFileName.php";

$controllerObj = new $controllerName();
//var_dump($controllerObj);
$actionFuncName = $actionName . 'Action';

if (!method_exists($controllerObj, $actionFuncName)) {
    echo '404';
    die;
}

//
$tpl = 'Templates/' . $controllerFileName . '/' . $actionName . '.phtml';
//
include "View.php";
$view = new View();
$controllerObj->view = $view;
//
$controllerObj->$actionFuncName();
$view->render($tpl);
