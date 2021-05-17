<?php

namespace App\Model;

use Composer\Package\Package;
use Framework\Core\Model;

class ModelLogin extends Model
{
    public function getLogin(): string
    {
        if (isset($_POST['login'])) {
            return $_POST['login'];
        } else {
            return 0;
        }
    }

    public function getPassword(): string
    {
        if (isset($_POST['password'])) {
            return $_POST['password'];
        } else {
            return 0;
        }
    }

    public function logOutButton(): bool
    {
        if (isset($_POST['logOut'])) {
            return true;
        } else {
            return false;
        }
    }
}
