<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerMain extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            $this->renderer->render("template_view", NULL, 'main_view');
    }
}
