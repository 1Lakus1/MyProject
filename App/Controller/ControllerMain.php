<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerMain extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            $mapper = new ProductMapper();
            $product_list = $mapper->getProducts(5);
            $this->renderer->render("template_view", $product_list, 'main_view');
    }
}
