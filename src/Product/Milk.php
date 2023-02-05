<?php

namespace src\Product;

class Milk extends Product
{
    protected string $name = 'Milk';
    public function getProduct()
    {
        return rand(8, 12);
    }
}