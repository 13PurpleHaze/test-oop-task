<?php

namespace src\Product;

abstract class Product
{
    protected string $name;
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns value of Product
     * @return mixed
     */
    abstract public function getProduct();
}