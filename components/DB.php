<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 12.06.2018
 * Time: 11:31
 */
class DB
{

    public static function dbGet()
    {
        $dbconfig = include (ROOT. '/config/DBconfig.php');
        return $dp = new PDO("mysql:host={$dbconfig['host']};dbname={$dbconfig['dbname']}", $dbconfig['user'], $dbconfig['pass']);
}

}