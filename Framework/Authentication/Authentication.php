<?php

namespace Framework\Authentication;

use Framework\Core\Session;
use Framework\Database\Database;

class Authentication
{
    private object $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function isAuth(): bool
    {
        $this->session->start();
        return $this->session->contains('auth');
    }

    public function auth(string $login, string $password): bool
    {
        $db = Database::connect();
        $sql = 'SELECT login FROM users WHERE login = :login AND password = :password';
        $statement = $db->prepare($sql);
        $statement->bindParam('login', $login);
        $statement->bindParam('password', $password);
        $statement->execute();
        $row = $statement->fetch();
        if($row){
            $this->session->start();
            $this->session->set('auth', true);
            $this->session->set('login', $row['login']);
            return true;
        }else{
            return false;
        }
    }

    public function getLogin(): string
    {
        return $this->session->get('login');
    }

    public function logOut(): void
    {
        $this->session->destroy();
    }
}
