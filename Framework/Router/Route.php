<?php

namespace Framework\Router;


use http\Exception;

class Route
{
    public static function start()
    {
        $controller_name = 'Main';
        $action_name = 'Index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
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
        $controller = new $controller_name();
        if (method_exists($controller, $action)) {
            $controller -> $action();
        }
    }
}
