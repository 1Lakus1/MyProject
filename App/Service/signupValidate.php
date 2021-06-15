<?php


namespace App\Service;


class signupValidate
{
    public static function validate(string $login, string $name, string $password): bool
    {
        if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $login)) {
            echo "Incorrect login!";
            return false;
        }
        if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $name)) {
            echo "Incorrect name!";
            return false;
        }
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
            echo 'Incorrect password! Must contain at least 1 number, 1 letter, 8-12 chars';
            return false;
        }
        return true;
    }
}