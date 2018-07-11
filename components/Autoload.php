<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 11.07.2018
 * Time: 10:55
 */


spl_autoload_register(function ($class) {
    // Получаем путь к файлу из имени класса
       $arrayPath = array(
       '/Model/',
       '/components/',
      '/controllers/'
       );
       foreach ($arrayPath as $classRoot) {
           $path = ROOT . $classRoot . $class . '.php';
           if (file_exists($path)) {
               require_once $path;
           }
       }

});
