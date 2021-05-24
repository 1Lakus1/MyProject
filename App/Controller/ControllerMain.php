<?php

namespace App\Controller;


class ControllerMain extends \Framework\Core\Controller
{
    private array $products;

    public function __construct()
    {
    }

    public function actionIndex()
    {

        $this->renderer->render("template_view", null, 'main_view');
    }
}
