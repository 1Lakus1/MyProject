<?php

namespace App\Controller;

use App\Mapper\UserMapper;
use Framework\Authentication\Authentication;
use App\Model\ModelLogin;
use http\Client\Curl\User;

class ControllerLogin extends \Framework\Core\Controller
{
    private object $auth;

    public function __construct()
    {
        parent::__construct();
        $this->auth = new Authentication();
    }

    public function actionIndex()
    {
        if (!$this->auth->isAuth()) {
            $this->renderer->render('template_view', null, 'login_view');
            if (isset($_POST['login']) && isset($_POST['password'])) {
                $login = $_POST['login'];
                $password = $_POST['password'];
                if ($this->auth->auth($login, $password)) {
                    header("Location: /user");
                };
            }
        } else {
            header("Location: /user");
        }
    }

    public function actionLogout()
    {
        $this->auth->logOut();
        header("Location: /login");
    }
}
