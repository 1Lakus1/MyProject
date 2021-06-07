<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerCatalog extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            $product_list = ProductMapper::getProducts();
            $this->renderer->render("template_view", $product_list, 'catalog_view');
    }
}
