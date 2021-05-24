<?php

namespace Framework\Database;
use \PDO;
class Database
{
    private array $opt;
    private string $user;
    private string $pass;
    private string $dsn;

    public function __construct()
    {
        $host = '127.0.0.1';
        $db = 'bikes_db';
        $charset = 'utf8';
        $this->user = 'root';
        $this->pass = '123456';
        $this->dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $this->opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
    }

    public function connect(): object
    {
        return new PDO($this->dsn, $this->user, $this->pass, $this->opt);
    }
}
