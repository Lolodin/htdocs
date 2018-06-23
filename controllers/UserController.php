<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 13.06.2018
 * Time: 10:07
 */
class UserController
{
    public static function actionRegister()
    {



        echo "register";
        require_once (ROOT. '/registerPage/index.php');
        return true;
    }

public static function actionUserput()
{

$name     = '';
$password = '';
$email    = '';

print_r($_POST);

    if (isset($_POST['name']))
    {
        $name     = $_POST['name'];
        $password = $_POST['password'];
        $email    = $_POST['email'];

        $errors = false;
 echo strlen ($name);
       if(User::checkName($name))
       {
           echo 'name - ok';
       }
              else
       {
           $errors[] = 'Имя должны содержать больше 2х символов';
       }
       if(User::checkEmail($email))
       {
           echo '$email-Ok';
       }
       else
       {
           $errors[] = 'Вы ввели некорректный email';
       }
       if(User::checkPassword($password))
       {
           echo '$password ok';
       }
       else
       {
           $errors[] = 'Пароль должен быть больше 6 символов';
       }
        if (User::checkBDEmail($email))
        {
            $errors[]= 'Почтовый адресс уже используется';
        }
        else
        {
            echo 'email bd - ok';

        }
        if($errors)
        {
            echo 'пользователь не добавлен';        }
        else
        {
            $result = Register::putUser($name, $email, $password);
            echo 'Пользователь добавлен';

        }


    }


return $errors;

    return true;
}


}