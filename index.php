<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 10.06.2018
 * Time: 23:05
 */

ini_set("display_errors",1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once(ROOT.'\components\Route.php');
require_once (ROOT. '/components/DB.php');
require_once (ROOT. '/Model/User.php');
require_once (ROOT.'/Model/Register.php');
require_once (ROOT.'/controllers/UserController.php');
$route = new Route();
$route->run();