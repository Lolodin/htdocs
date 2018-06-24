<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 15.06.2018
 * Time: 8:42
 */


class User
{




//______________________________________________________________________
    public static function checkName($name)
    {
        if(strlen ($name)>2)
        {
             return true;
        }
        else
        {
            return false;
        }
    }
    public static function checkPassword($password)
    {
        if(strlen ($password)>6)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
    public static function checkEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
           return true;
        }
        else
        {
            return false;
        }


    }
    public static function checkBDEmail($email)
    {

        $db = DB::dbGet();
        $sql ='SELECT * FROM students WHERE email = :email';

        $result= $db->prepare($sql);
        $result->bindParam( ':email', $email, PDO::PARAM_STR);
        $result->execute();
        $a=(bool)$result->rowCount();
        if ($a!=0)
            return true;
        return false;

    }
    public static function checkUserDate($email,$password)
    {
        $db = DB::dbGet();
        $sql ='SELECT * FROM students WHERE email = :email and :password';

        $result= $db->prepare($sql);
        $result->bindParam( ':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password',$password,PDO::PARAM_STR);
        $result->execute();
        $user = $result->fetch();
        if ($user)
        {
            return $user['id'];
        }
        else
        {
            echo 'Пользхователя не существует';
            return false;
        }


    }





    }
   // public static function putUserDb($name, $email, $password)
  //  {
  //      $db = DB::dbGet();
  //      $sql
  //  }


//______________________________________________________________________


