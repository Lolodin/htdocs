<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 13.06.2018
 * Time: 10:13
 */
class Register
{


    public static function putUser($name, $email, $password)
    {

      $db = DB::dbGet();
      $put = $db->query("INSERT INTO `students`(`login`, `email`, `password`) VALUES ('$name', '$email','$password')");


      if ($put) {
          echo 'Сработало';
      }
      else
          echo "Что то пошло не так";

    }

}