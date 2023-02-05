<?php


use src\Animal\Chicken;
use src\Animal\Cow;
use src\Farm;

require_once 'vendor/autoload.php';


$farm = new Farm();

// Adding a new animal to the barn (20 chickens and 10 cows)
for ($i = 0; $i < 20; $i++) {
    $farm->addAnimal(new Chicken());
}
for ($i = 0; $i < 10; $i++) {
    $farm->addAnimal(new Cow);
}

// Collect animal products in a week
for ($i = 0; $i < 7; $i++) {
    $farm->collectProducts();
}

// Print the result
print_r($farm->getProducts());