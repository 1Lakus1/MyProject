<?php

namespace App\Model;

use Framework\Core\Model;

class ModelLogin extends Model
{
    public function getLogin(): string
    {
        if (isset($_POST['login'])) {
            return $_POST['login'];
        }
    }

    public function getPassword(): string
    {
        if (isset($_POST['password'])) {
            return $_POST['password'];
        }
    }

    public function logOutButton(): bool
    {
        if (isset($_POST['logOut'])) {
            return true;
        }
    }
}
