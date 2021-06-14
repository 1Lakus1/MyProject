<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerProduct extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            if(isset($_GET['id'])) {
                $id = (int) ($_GET['id']);
                $product = ProductMapper::getProductById($id);
                $this->renderer->render("layout_view", $product, 'product_view');
            }else{
                throw new \Exception("This product doesn't exist!");
            }

    }
}
