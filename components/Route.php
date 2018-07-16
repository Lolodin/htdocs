<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 11.06.2018
 * Time: 11:34
 */

class Route
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function getUrl()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], ('/')); //получаем путь
        }

    }

    public function run()
    {

        $uri = $this->getUrl();

        foreach ($this->routes as $routeURL => $path) {


            if (preg_match("~$routeURL~", $uri))  //return 1
            {
                $newsRoute = preg_replace("~$routeURL~", $path, $uri);
                $segments = explode('/', $newsRoute);
                $controllerName = array_shift($segments) . 'Controller'; //
                $controllerName = ucfirst($controllerName);//
                $actionName = 'action' . ucfirst(array_shift($segments)); // $segments =''
 
                if($segments[0]) {
                    $numberPage = $segments[0];

                }
                if($segments[1])
                {
                    $metodSort = $segments[1];
                }
                // $controllerName = ucfirst(array_shift($segments)).'Controller';
                // $controllerName = $result . 'Controller';
                // $actionName = 'action' . ucfirst(array_shift($segments));
                /*Добавить переменную с параметрами, которые будут передаваться в нужный контроллер    */



                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                $controllerObject = new $controllerName;

                if ($actionName == 'actionIndex')
                {
                    $result = $controllerObject->$actionName($metodSort, $numberPage);
                }
                else
                {
                    $result = $controllerObject->$actionName();
                }

                if ($result != null) {
                    break;
                }


            }
        }

    }
}

