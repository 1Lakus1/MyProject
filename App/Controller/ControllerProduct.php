<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerProduct extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            $mapper = new ProductMapper();
            if(isset($_GET['id'])) {
                $id = (int) ($_GET['id']);
                $product = $mapper->getProductById($_GET['id']);
                $this->renderer->render("template_view", $product, 'product_view');
            }else{
                throw new \Exception("This product doesn't exist!");
            }

    }
}
