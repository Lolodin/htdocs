<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 11.06.2018
 * Time: 11:08
 */
return array(
    'main/([0-9]+)' =>  'main/index/$1',
    'main' => 'main/index',
    'search' => 'main/search',
    'register' => 'main/register',
     'cabinet' => 'cabinet/cabinet',
    'login' => 'main/login',
    'update' => 'user/UserUpdate',
    'logout' => 'main/logout',
    'sort/([A-Z]+)/([0-9]+)'  => 'main/sort/$1/$2'
);