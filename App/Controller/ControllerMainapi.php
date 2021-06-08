<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerMainapi extends \Framework\Core\Controller
{
    public function actionIndex()
    {

            $productModel_list = ProductMapper::getProducts(5);
            $products = [];
            foreach($productModel_list as $productModel){
                $product = [
                    'id' => $productModel->getId(),
                    'name' => $productModel->getName(),
                    'imgName' => $productModel->getImgName(),
                    'price' => $productModel->getPrice()
                ];
                array_push($products, $product);
            }
            print_r(json_encode($products));
    }
}
