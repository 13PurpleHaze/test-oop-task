<?php

namespace src\Animal;

use src\Product\Egg;
use src\Product\Product;

class Chicken extends Animal
{

    public function produce(): Product
    {
        return new Egg();
    }
}