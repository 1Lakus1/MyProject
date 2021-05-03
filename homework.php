<?php
declare(strict_types=1);

error_reporting(E_ALL);

class ProductFindException extends Exception{
    protected $code = 404;
    protected $message = "Can't find product";
}

class ProductExistsException extends Exception{
    protected $message = "Product with same id already exists in database.";
}

class ProductsCountException extends Exception{
    protected $message = "Too big id";
}

class Product{
    private int $id;
    private string $name;

    public function __construct(int $id, string $name){
        $this -> id = $id;
        $this -> name = $name;
    }

    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
    }
}

function fill_rand_products(int $count){
    $product = [
      'id' => NULL,
      'name' => "Phone",
    ];

    $products = [];

    foreach (range(1, $count) as $id) {
        $product['id'] = $id;
        $product['name'] = "Phone".$id;
        $products[$id] = $product;
    }
   file_put_contents('db.txt', json_encode($products));
}

function get_product(int $id){
    $products = json_decode(file_get_contents('db.txt'), true);

    $flag = true;

    foreach ($products as $key => $product) {
        if($product['id'] === $id){
            print_r($product);
            $flag = false;
            break;
        }
        if($key > $id){
            break;
        }
    }

    if($flag){
        throw new ProductFindException();
    }
}

function setProduct(Product $entered_product){
    $products = json_decode(file_get_contents("db.txt"), true);

    if($entered_product->getId() > count($products)){
        throw new ProductsCountException();
    }
    foreach($products as $key => $product){
        if($product['id'] === $entered_product->getId()){
            throw new ProductExistsException();
        }
    }
    $products[$entered_product->getId()] = ["id" => $entered_product->getId(), "name" => $entered_product->getId()];
    ksort($products);
    file_put_contents('db.txt', json_encode($products));

}

//fill_rand_products(100);

/*try{
    get_product(100);
}catch (ProductFindException $exception){
    print_r($exception->getMessage()."\n");
}*/

/*$product = new Product(32, "Phone32");

try{
    setProduct($product);
}catch (ProductExistsException $exception){
    print_r($exception->getMessage()."\n");
}catch (ProductsCountException $exception){
    print_r($exception->getMessage()."\n ");
}*/