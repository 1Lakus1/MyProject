<?php

namespace App\Model;

class ProductModel
{
    private int $id;
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

    public function getId(): int
    {
        return $this -> id;
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

    public function setId(int $id): void
    {
        $this -> id = $id;
    }
}