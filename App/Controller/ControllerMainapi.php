<?php

namespace App\Controller;
use App\Mapper\ProductMapper;

class ControllerMainapi extends \Framework\Core\Controller
{
    public function actionIndex()
    {
            $pagging = 0;
            $count = 0;
            $sort = 0;
            if(isset($_GET['count'])){
                $count = $_GET['count'];
                if(isset($_GET['pagging'])){
                    $pagging = $_GET['pagging'];
                }
            }
            if(isset($_GET['sort'])){
                $sort = $_GET['sort'];
            }
            $productModel_list = ProductMapper::getProducts($count, $pagging, $sort);
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
            echo (json_encode($products));
    }

    public function actionCount()
    {
        echo (json_encode(ProductMapper::getProductCount()));
    }
}
