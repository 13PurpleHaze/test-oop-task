<?php

namespace src\Animal;

use src\Product\Milk;
use src\Product\Product;

class Cow extends Animal
{

    public function produce(): Product
    {
        return new Milk();
    }
}