<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 11.06.2018
 * Time: 18:56
 */
include_once (ROOT. '/Model/Main.php');
class MainController
{
    public function actionIndex ()
{
    $a = Main::getMainPage();
     require_once(ROOT . '/view/MainPage.php');
     return true;
}

public function actionSearch()
{
    echo 'search Action';
    return true;
}
public static function actionLogin()
    {
        echo 'Login';
        require_once (ROOT.'/view/LoginPage.php');
        return true;
    }
public static function actionRegister()
    {

        echo "register";
        require_once(ROOT . '/view/RegisterPAge.php');
        return true;
    }

public function actionLogout()
{
    session_start();
    unset($_SESSION['user']);
    header('Location: /main');
}


}