<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 13.06.2018
 * Time: 10:13
 */
class Register
{
    public static function getUser()
    {
        $db = DB::dbGet();
        $newArray = array();

        $result = $db->query('SELECT  * FROM students');


    }

}