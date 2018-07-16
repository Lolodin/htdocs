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




    public static function getFive($metodSort, $numberPage)
    {
        $db = DB::dbGet();





        $newArray   = array();
            $numberPage = ($numberPage-1) * 5;





        if ($metodSort == 'name')
        {
            echo 'Сортировка по имени';
            $result = $db->query("SELECT  * FROM students ORDER BY `students`.`Name` ASC  LIMIT $numberPage, 5");
//            $result = $db->query("SELECT  * FROM students ORDER BY `students`.`Name` DESC  LIMIT $numberPage, 5");
        }
        if ($metodSort== 'balls')
        {
            echo 'Сортировка по баллам';
            $result = $db->query("SELECT  * FROM students ORDER BY `students`.`Balls` ASC  LIMIT $numberPage, 5");
            //            $result = $db->query("SELECT  * FROM students ORDER BY `students`.`Balls` DESC  LIMIT $numberPage, 5");
        }
        if ($metodSort ==null)
         {
             $result = $db->query("SELECT  * FROM students LIMIT $numberPage, 5");
         }


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
