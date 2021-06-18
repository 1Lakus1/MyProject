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

    // variable sort - sort price direction. 0 - default, 1 - ASC, 2 - DESC

    public static function getProducts(int $maxCount = 0, int $pagging = 0, int $sort = 0): array
    {
        $db = Database::connect();
        $product_list = [];
        if($maxCount !== 0) {
            $pagging = $maxCount * $pagging;
            switch($sort){
                case 1:
                    $sql = 'SELECT id, name, price, img FROM products ORDER BY price ASC LIMIT :pagging, :maxCount';
                    break;
                case 2:
                    $sql = 'SELECT id, name, price, img FROM products ORDER BY price DESC LIMIT :pagging, :maxCount';
                    break;
                default:
                    $sql = 'SELECT id, name, price, img FROM products ORDER BY id DESC LIMIT :pagging, :maxCount';
                    break;
            }
            $statement = $db->prepare($sql);
            $statement->bindParam('pagging', $pagging);
            $statement->bindParam('maxCount', $maxCount);
            $statement->execute();
        } else {
            switch($sort){
                case 1:
                    $sql = 'SELECT id, name, price, img FROM products ORDER BY price ASC';
                    break;
                case 2:
                    $sql = 'SELECT id, name, price, img FROM products ORDER BY price DESC';
                    break;
                default:
                    $sql = 'SELECT id, name, price, img FROM products ORDER BY id DESC';
                    break;
            }
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

    public static function getProductCount(): int
    {
        $db = Database::connect();
        $sql = 'SELECT count(*) AS count FROM products';
        $statement = $db->prepare($sql);
        $statement->execute();
        return ($statement->fetch())['count'];
    }

}
