<?php

namespace Framework\Autoloader;
class Autoload
{
    /*public function __construct(array $rules =[]){

    }*/
    public function load($classname)
    {
        $parts = explode("\\", $classname);
        $path = document_root . "/" . implode("/", $parts) . ".php";
        if (file_exists($path)) {
            require $path;
        } else {
            throw new ClassFileNotExists("Class $path not exists");
        }
    }
}

class ClassFileNotExists extends \Exception
{
}

