<?php
namespace Framework\Router;
use App\Controller\controller_main;
use http\Exception;

class Route{
    static function start(){
        $controller_name = 'main';
        $action_name = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if(!empty($routes[1])){
            $controller_name = strtolower($routes[1]);
        }
        if(!empty($routes[2])){
            $action_name = strtolower($routes[2]);
        }
        $controller_name = "controller_".$controller_name;
        $action = "action_".$action_name;
        $controller_name = '\App\Controller\\'.$controller_name;
        $controller = new $controller_name();
        if(method_exists($controller, $action)){
            $controller -> $action();
        }


    }

}

?>