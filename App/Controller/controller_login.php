<?php

namespace App\Controller;

use Framework\Authentication\authentication;
use App\Model\model_login;

class controller_login extends \Framework\Core\contoller
{
    protected $authentication;
    protected $model_login;

    public function __construct()
    {
        parent::__construct();
        $this->model_login = new model_login();
        $this->authentication = new authentication();
    }

    public function action_index()
    {
        /*$this->renderer->render("template_view", NULL, 'login_view');*/
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
