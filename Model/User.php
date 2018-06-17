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
        if(strval($name)>2)
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
        if(strval($password)>6)
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
        $result->fetchColumn();
            if ($result->fetchColumn())
            return true;
        else
            return false;

    }


//______________________________________________________________________

}
