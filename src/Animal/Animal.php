<?php

namespace src\Animal;


use src\Product\Product;

abstract class Animal
{
    private int $id;

    /**
     *  Constructor sets the id of animal
     */
    public function __construct()
    {
        $this->id = spl_object_id($this);
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Create new Product
     * @return Product
     */
    abstract public function produce(): Product;
}