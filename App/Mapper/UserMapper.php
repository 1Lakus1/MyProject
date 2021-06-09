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
}
