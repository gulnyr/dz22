<?php


require_once __DIR__ . './controllers/NewsController.php';
$controller = new NewsController();
$controller->actionAll();


$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['ctrl'] : 'All';

$controllerClassName = $ctrl . 'Controller';
require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';
$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();

?>