<?php

namespace src;


use src\Animal\Animal;

class Farm
{
    private array $animals;
    private array $products;

    /**
     * Add one animal in barn (array of animals)
     * @param Animal $animal
     * @return void
     */
    public function addAnimal(Animal $animal): void
    {
        $this->animals[$animal->getId()] = $animal;
    }

    /**
     * Collect products of animals and set it in array
     * @return void
     */
    public function collectProducts(): void
    {
        foreach ($this->animals as $animal) {
            $product = $animal->produce();
            if (isset($this->products[$product->getName()])) {
                $this->products[$product->getName()] += $product->getProduct();
            } else {
                $this->products[$product->getName()] = $product->getProduct();
            }
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }

}