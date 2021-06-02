<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerProduct extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            $mapper = new ProductMapper();
            $product = $mapper->getProductById(6);

            $this->renderer->render("template_view", NULL, 'product_view');
    }
}
