<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 12.06.2018
 * Time: 11:28
 */

Class Main
{
    public static function getMainPage() //Принимаем переменную numberPage
    {
        $db = DB::dbGet();

        $newArray = array();
        //  $numberPage = $numberPage *5;
        //$intoPage = $numberPage - 5;
        $result = $db->query('SELECT  * FROM students'); // Limit $numberPage*5

        $i = 0;
        while ($row = $result->fetch()) {

            $newArray[$i]['id'] = $row['id'];
            $newArray[$i]['Name'] = $row['Name'];
            $newArray[$i]['LastName'] = $row['LastName'];
            $newArray[$i]['idGroup'] = $row['idGroup'];
            $newArray[$i]['Balls'] = $row['Balls'];
            $i++;


        }
        return $newArray;


    }




    public static function getFive($numberPage)
    {
        $db = DB::dbGet();

        $newArray = array();
        $numberPage = $numberPage*5;

        $intoPage = $numberPage - 4;

        $result = $db->query("SELECT  * FROM students WHERE id BETWEEN $intoPage AND $numberPage");

        $i = 0;
        while ($row = $result->fetch())
        {

            $newArray[$i]['id'] = $row['id'];
            $newArray[$i]['Name'] = $row['Name'];
            $newArray[$i]['LastName'] =$row['LastName'];
            $newArray[$i]['idGroup'] = $row['idGroup'];
            $newArray[$i]['Balls'] = $row['Balls'];
            $i++;


        }
        return $newArray;



    }



}
