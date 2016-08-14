<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 10/08/2016
 * Time: 18:32
 */

namespace Itb;

function loginAction()
{
    $pageTitle = 'LOGIN';
    require_once  __DIR__. '/../../CVWebsite/templates/login.php';
}
function indexAction()
{
    $pageTitle = 'HOME';
    require_once  __DIR__. '/../../CVWebsite/templates/index.php';
}
function employeeHomeAction()
{
    $pageTitle = 'EMPLOYER HOME';
    require_once  __DIR__. '/../../CVWebsite/templates/employerHome.php';
}
function employeeEditAction()
{
    $pageTitle = 'EMPLOYER EDIT PAGE';
    require_once  __DIR__. '/../../CVWebsite/templates/employerEdit.php';
}
function studentHomeAction()
{
    $pageTitle = 'STUDENT HOME';
    require_once  __DIR__. '/../../CVWebsite/templates/studentHome.php';
}
function studentEditAction()
{
    $pageTitle = 'STUDENT EDIT PAGE';
    require_once  __DIR__. '/../../CVWebsite/templates/studentEdit.php';
}
function lecturerHomeAction()
{
    $pageTitle = 'LECTURER HOME';
    require_once  __DIR__. '/../../CVWebsite/templates/lecturerHome.php';
}
function lecturerEditAction()
{
    $pageTitle = 'LECTURER EDIT PAGE';
    require_once  __DIR__. '/../../CVWebsite/templates/lecturerEdit.php';
}


class MainController
{
    public function loginAction($twig)
    {
        $argsArray = [ 'title' => "LOGIN"];
        $templateName = 'login';
        print $twig->render($templateName . 'html.twig', $argsArray);
        //require_once __DIR__ . '/../templates/login.php';
    }

    public function indexAction($twig)
    {
        $argsArray = [ 'title' => "HOME"];
        $templateName = 'index';
        print $twig->render($templateName . 'html.twig', $argsArray);
        //require_once __DIR__ . '/../templates/index.php';
    }

    public function employerHomeAction($twig)
    {
        $argsArray = [ 'title' => "EMPLOYER HOME"];
        $templateName = 'employerHome';
        print $twig->render($templateName . 'html.twig', $argsArray);
        //require_once __DIR__ . '/../../CVWebsite/templates/employerHome.php';
    }

    public function lecturerHomeAction($twig)
    {
        $argsArray = [ 'title' => "LECTURER HOME"];
        $templateName = 'lecturerHome';
        print $twig->render($templateName . 'html.twig', $argsArray);
        //require_once __DIR__ . '/../../CVWebsite/templates/lecturerHome.php';
    }

    public function studentHomeAction($twig)
    {
        $argsArray = [ 'title' => "STUDENT HOME"];
        $templateName = 'studentHome';
        print $twig->render($templateName . 'html.twig', $argsArray);
        //require_once __DIR__ . '/../../CVWebsite/templates/studentHome.php';
    }
    
    public function processLoginAction()
    {
        $isLoggedIn = false;
        
        $username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_GET, 'password', FILTER_SANITIZE_STRING);
        
        if (('admin' == $username) & ('admin' == $password)){
            $isLoggedIn = true;
        }
        
        if ($isLoggedIn){
            require_once __DIR__ . '/../../CVWebsite/templates/lecturerHome.php';
        } else {
            require_once __DIR__ . '/../../CVWebsite/templates/login.php';
        }
    }
}