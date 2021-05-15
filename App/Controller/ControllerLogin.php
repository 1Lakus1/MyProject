<?php

namespace App\Controller;

use Framework\Authentication\Authentication;
use App\Model\ModelLogin;

class ControllerLogin extends \Framework\Core\Controller
{
    protected object $authentication;
    protected object $model_login;

    public function __construct()
    {
        parent::__construct();
        $this->model_login = new ModelLogin();
        $this->authentication = new authentication();
    }

    public function actionIndex()
    {
        if ($this->authentication->isAuth()) {
            $this->renderer->render("template_view", ["login" => $this->authentication->getLogin()], 'logged_view');
            if ($this->model_login->logOutButton()) {
                $this->authentication->logOut();
            }
        } else {
            $this->renderer->render("template_view", null, 'login_view');
            $login = $this->model_login->getLogin();
            $password = $this->model_login->getPassword();
            $this->authentication->Auth($login, $password);
        }
    }
}
