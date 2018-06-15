<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 12.06.2018
 * Time: 11:28
 */

Class Main
{
    public static function getMainPage()
    {
        $db = DB::dbGet();

       $newArray = array();

       $result = $db->query('SELECT  * FROM students');

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