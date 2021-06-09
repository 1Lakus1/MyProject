<?php

namespace App\Model;

class UserModel
{
    private string $email;
    private string $name;
    private string $login;

    public function getName(): string
    {
        return $this -> name;
    }

    public function getLogin(): string
    {
        return $this -> login;
    }

    public function getEmail(): string
    {
        return $this -> email;
    }

    public function setName(string $name): void
    {
        $this -> name = $name;
    }

    public function setLogin(string $login): void
    {
        $this -> login = $login;
    }

    public function setEmail(string $email): void
    {
        $this -> email = $email;
    }
}