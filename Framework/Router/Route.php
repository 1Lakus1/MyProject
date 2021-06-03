<?php

namespace Framework\Router;


use http\Exception;

class Route
{
    public static function start()
    {
        $controller_name = 'Main';
        $action_name = 'Index';
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('?', $uri)[0];
        $routes = explode('/', $uri);
        if (!empty($routes[1])) {
            $controller_name = strtolower($routes[1]);
            $controller_name = ucfirst($controller_name);
        }
        if (!empty($routes[2])) {
            $action_name = strtolower($routes[2]);
            $action_name = ucfirst($action_name);
        }
        $controller_name = "Controller" . $controller_name;
        $action = "action" . $action_name;
        $controller_name = '\App\Controller\\' . $controller_name;
        if(!class_exists($controller_name)){
             throw new \Exception("Controller doesn't exists");
        }
        $controller = new $controller_name();
        if (method_exists($controller, $action)) {
            $controller -> $action();
        }else{
            throw new \Exception("Method of controller doesn't exists");
        }
    }
}
