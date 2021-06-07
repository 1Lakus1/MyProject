<?php

namespace Framework\Database;
use \PDO;
class Database
{

    public static function connect(): object
    {
        if(file_exists(DOCUMENT_ROOT.'/db_environment.php')){
            require_once DOCUMENT_ROOT.'/db_environment.php';
        }else{
            throw new \Exception('File with database config is not exists.');
        }

        $charset = 'utf8';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        return new PDO($dsn, $user, $pass, $opt);
    }
}
