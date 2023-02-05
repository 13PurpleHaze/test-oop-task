<?php

namespace src\Product;

class Egg extends Product
{
    protected string $name = 'Egg';
    public function getProduct()
    {
        return rand(0, 1);
    }
}