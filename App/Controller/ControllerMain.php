<?php

namespace App\Controller;


class ControllerMain extends \Framework\Core\Controller
{

    public function actionIndex()
    {

        $this->renderer->render("template_view", null, 'main_view');
    }
}
