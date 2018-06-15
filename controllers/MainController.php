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
     require_once(ROOT . '/mainPage/index.php');
     return true;
}

public function actionSearch()
{
    echo 'search Action';
    return true;
}






}