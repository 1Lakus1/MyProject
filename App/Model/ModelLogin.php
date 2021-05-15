<?php

namespace App\Model;

use Framework\Core\Model;

class ModelLogin extends Model
{
    public function getLogin()
    {
        if (isset($_POST['login'])) {
            $login = $_POST['login'];
            return $login;
        }
    }

    public function getPassword()
    {
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            return $password;
        }
    }

    public function logOutButton()
    {
        if (isset($_POST['logOut'])) {
            return true;
        }
    }
}