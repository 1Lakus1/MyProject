<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '0');

class ProductIdException extends Exception{
    protected $code = 404;
    protected $message = 'Can\'t find product';
}

class PhoneIdException extends ProductIdException{};

$product = [
    'id' => 1,
    'name' => 'Phone',
    'description' => ''
];

$products = [];

foreach (range(1, 100) as $idx) {
    $product['id'] = $idx;
    $product['name'] = $product['name'] . $idx;
    $products[] = $product;
}

file_put_contents('db.txt', json_encode($products));

function getProduct(int $id) {
    $productsDecode = json_decode(file_get_contents('db.txt'), true);

    $flag = true;

    foreach ($productsDecode as $product) {
        if ($product['id'] === $id) {
            print_r($product);
            $flag = false;
        }
    }

    if ($flag) {
        throw new ProductIdException();
    }

}

try {
    getProduct(104);
} catch (ProductIdException $exception) {
    print_r($exception);
    print_r('ProductIdException' . "\n");
} catch (Exception $exception) {
    print_r('Exception' . "\n");
}






