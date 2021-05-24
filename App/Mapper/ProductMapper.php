<?php

namespace App\Mapper;

use Framework\Database\Database;
use App\Model\ProductModel;

class ProductMapper
{
    private object $db;
    private object $product;

    public function __construct()
    {
        $databaseWrapper = new Database();
        $this->db = $databaseWrapper->connect();
    }

    public function getProductById($id)
    {
        $sql = 'SELECT id, name, price, img FROM products WHERE id=:id';
        $statement = $this->db->prepare($sql);
        $statement->bindParam('id', $id);
        $statement->execute();
        $row = $statement->fetch();
        $this->product = new ProductModel();
        $this -> product -> setName($row['name']);
        $this -> product -> setPrice($row['price']);
        $this -> product -> setImgName($row['img']);
        return $this->product;
    }

    public function setProduct(object $product): void
    {
        $sql = 'INSERT INTO products(name, price, img) VALUES (:name, :price, :img)';
        $statement = $this->db->prepare($sql);
        $statement->bindParam('name', $product->name);
        $statement->bindParam('price', $product->price);
        $statement->bindParam('img', $product->imgName);
        $statement->execute();
    }
}
