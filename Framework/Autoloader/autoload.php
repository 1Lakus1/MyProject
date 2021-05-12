<?php
namespace Framework\Autoloader;
Class Autoload{
     /*public function __construct(array $rules =[]){

     }*/
     public function load($classname){
        $parts = explode("\\", $classname);
        $path = document_root."/".implode("/", $parts).".php";
        if(file_exists($path)){
            require $path;
        }else{
            throw new ClassFileNotExists;
        }
     }
 }

 Class ClassFileNotExists extends \Exception{
    protected $message = "File with this class not found";
 }