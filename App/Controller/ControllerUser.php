<?php

namespace App\Controller;

use App\Mapper\UserMapper;
use Framework\Authentication\Authentication;
use App\Model\ModelLogin;
use http\Client\Curl\User;

class ControllerUser extends \Framework\Core\Controller
{
    private object $auth;

    public function __construct()
    {
        parent::__construct();
        $this->auth = new Authentication();
    }

    public function actionIndex()
    {
        if ($this->auth->isAuth()) {
            $this->model = UserMapper::getUser($this->auth->getLogin());
            $this->renderer->render('layout_view', $this->model, 'user_view');
        } else {
            header("Location: /login");
        }
    }
}
