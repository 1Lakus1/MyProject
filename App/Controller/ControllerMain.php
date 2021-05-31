<?php

namespace App\Controller;


class ControllerMain extends \Framework\Core\Controller
{

    public function actionIndex()
    {
        try {
            $this->renderer->render("template_view", null, 'main_view');
        }catch (\Exception $e){
            echo $e->getMessage();
        };
    }
}
