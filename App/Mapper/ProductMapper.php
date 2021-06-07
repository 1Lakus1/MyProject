<?php

namespace App\Mapper;

use Framework\Database\Database;
use App\Model\ProductModel;
use PHP_CodeSniffer\Tests\Core\File\FindEndOfStatementTest;

class ProductMapper
{

    public static function getProductById($id)
    {
        $db = Database::connect();
        $sql = 'SELECT products.id, name, price, img, description FROM products JOIN descriptions ON products.id = descriptions.product_id WHERE products.id = :id;';
        $statement = $db->prepare($sql);
        $statement->bindParam('id', $id);
        $statement->execute();
        $row = $statement->fetch();
        if($row) {
            $product = new ProductModel();
            $product->setName($row['name']);
            $product->setPrice($row['price']);
            $product->setImgName($row['img']);
            $product->setId($row['id']);
            $product->setDescription($row['description']);
            return $product;
        }else{
            throw new \Exception("This product doesn't exist!");
        }
    }

    public static function setProduct(object $product): void
    {
        $db = Database::connect();
        $sql = 'INSERT INTO products(name, price, img) VALUES (:name, :price, :img)';
        $statement = $db->prepare($sql);
        $statement->bindParam('name', $product->name);
        $statement->bindParam('price', $product->price);
        $statement->bindParam('img', $product->imgName);
        $statement->execute();
    }

    public static function getProducts(int $maxCount=NULL): array
    {
        $db = Database::connect();
        $product_list = [];
        if(isset($maxCount)) {
            $sql = 'SELECT id, name, price, img FROM products ORDER BY id DESC LIMIT :maxCount';
            $statement = $db->prepare($sql);
            $statement->bindParam('maxCount', $maxCount);
            $statement->execute();
        } else {
            $sql = 'SELECT id, name, price, img FROM products ORDER BY price DESC';
            $statement = $db->prepare($sql);
            $statement->execute();
        }
        while ($row = $statement->fetch()) {
            $product = new ProductModel();
            $product->setName($row['name']);
            $product->setPrice($row['price']);
            $product->setImgName($row['img']);
            $product->setId($row['id']);
            $product_list[] = $product;
        }
        return $product_list;
    }


}
