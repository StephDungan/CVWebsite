<?php

require_once __DIR__ . '/../../CVWebsite/src/mainController.php';
require_once __DIR__ . '/../../CVWebsite/vendor/autoload.php';
require_once __DIR__ . '/../../CVWebsite/app/setup.php';

use Itb\MainController;

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$mainController = new MainController();

$templatePath = __DIR__ . "/../../CVWebsite/templates";

$loader = new Twig_Loader_Filesystem($templatePath);
$twig = new Twig_Environment($loader);

if ('login' == $action)
{
    $mainController->loginAction($twig);
} elseif ('index' == $action){
    $mainController->indexAction($twig);
}

switch ($action){
    case 'processLogin': $mainController->processLoginAction();
}