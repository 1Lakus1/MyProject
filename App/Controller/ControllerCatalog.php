<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerCatalog extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            $mapper = new ProductMapper();
            $product_list = $mapper->getProducts();
            $this->renderer->render("template_view", $product_list, 'catalog_view');
    }
}
