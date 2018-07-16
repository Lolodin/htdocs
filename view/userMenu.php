<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 14.07.2018
 * Time: 15:10
 */


$isUser = User::isUser();

if ($isUser)
{

    $userMenu = '

<div class = "btn-group">
<a href=/cabinet/ ><button type="button" class="btn btn-primary btn-lg btn-block">Кабинет</button></a>
        <br>
        <a href=/logout/ ><button type="button" class="btn btn-primary btn-lg btn-block">Выход</button></a>
        <br>
        <a href=/main/1 > <button type="button" class="btn btn-primary btn-lg btn-block">Главная страница</button> </a>
        </div>';

}
else
{
    $userMenu =
        '

<div class = "btn-group-vertical">
<a href=/register/ ><button type="button" class="btn btn-primary btn-lg btn-block">Регистрация</button></a>
        <br>
        <a href=/login/ ><button type="button" class="btn btn-primary btn-lg btn-block">Вход</button></a>
        <br>
    <a href=/main/1 > <button type="button" class="btn btn-primary btn-lg btn-block">Главная страница</button> </a>
    </div>
    
    
    ';
}
echo $userMenu;