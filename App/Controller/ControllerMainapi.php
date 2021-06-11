<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerMainapi extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            if(isset($_GET['count'])){
                $count = $_GET['count'];
            }else {
                $count = NULL;
            }
            $productModel_list = ProductMapper::getProducts($count);
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
