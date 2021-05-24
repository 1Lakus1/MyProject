<?php

namespace App\Model;

class ProductModel
{
    private string $name;
    private string $imgName;
    private float $price;

    public function getName(): string
    {
        return $this -> name;
    }

    public function getImgName(): string
    {
        return $this -> imgName;
    }

    public function getPrice(): string
    {
        return $this -> price;
    }

    public function setName(string $name): void
    {
        $this -> name = $name;
    }

    public function setImgName(string $imgName): void
    {
        $this -> imgName = $imgName;
    }

    public function setPrice(string $price): void
    {
        $this -> price = $price;
    }
}