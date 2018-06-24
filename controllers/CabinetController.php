<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 24.06.2018
 * Time: 10:00
 */

class CabinetController
{
public function actionCabinet()
{

    $userId = User::checkLogget();

    if($userId) {
        require_once(ROOT . '/view/cabinet.php');
    }
    return true;
}











}