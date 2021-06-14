<?php

namespace App\Controller;

use App\Mapper\ProductMapper;

class ControllerCatalog extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            $this->renderer->render("layout_view", NULL, 'catalog_view');
    }
}