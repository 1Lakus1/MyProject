<?php

namespace Framework\Authentication;

use Framework\Core\Session;

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

    public function auth($login, $pass): bool
    {
        if ($login === "Vlados" && $pass === "admin") {
            $this->session->start();
            $this->session->set('auth', true);
            $this->session->set('login', $login);
            return true;
        } else {
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
