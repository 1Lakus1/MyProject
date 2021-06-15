<?php

namespace App\Mapper;

use App\Model\UserModel;
use Framework\Database\Database;
use PHP_CodeSniffer\Tests\Core\File\FindEndOfStatementTest;

class UserMapper
{
    public static function getUser(string $login)
    {
        $db = Database::connect();
        $sql = 'SELECT name, login FROM users WHERE login = :login';
        $statement = $db->prepare($sql);
        $statement->bindParam('login', $login);
        $statement->execute();
        $row = $statement->fetch();
        if ($row) {
            $user = new UserModel();
            $user->setName($row['name']);
            $user->setLogin($row['login']);
            return $user;
        } else {
            throw new \Exception('User undefined');
        }
    }

    public static function createUser(string $login, string $password, string $name): bool
    {
        $db = Database::connect();
        $sql = 'SELECT name FROM users WHERE name = :name';
        $statement = $db->prepare($sql);
        $statement->bindParam('name', $name);
        $statement->execute();
        $row = $statement->fetch();
        if ($row) {
            echo 'user with this login is exists';
            return false;
        }
        $sql = 'INSERT INTO users(login, password, name) VALUES (:login, :password, :name);';
        $statement = $db->prepare($sql);
        $statement->bindParam('login', $login);
        $statement->bindParam('password', $password);
        $statement->bindParam('name', $name);
        $statement->execute();
        echo 'succes added new user';
        return true;
    }
}
