<?php

namespace App\Factories\Builder;

use App\Factories\Builder\Exceptions\InvalidIngredientException;

class Pizza implements PizzaInterface
{
    /**
     * @var string []
     */
    private $ingredients = [];

    public function addCheese()
    {
        $this->ingredients[] = "cheese";
        return $this;
    }

    public function addBeacon()
    {
        $this->ingredients[] = "beacon";
        return $this;
    }

    public function addPineapple()
    {
        $this->ingredients[] = "pineapple";
        return $this;
    }

    public function addMushroom()
    {
        $this->ingredients[] = "mushroom";
        return $this;
    }

    public function addSeaFood()
    {
        $this->ingredients[] = "sea food";
        return $this;
    }

    public function validateState()
    {
        if (empty($this->ingredients)) {
            throw new InvalidIngredientException("No ingredient supplied.");
        }
    }

    public function represent(): string
    {

        $layers = ["dough"] + $this->ingredients;
        return implode("+", $layers);
    }
}

