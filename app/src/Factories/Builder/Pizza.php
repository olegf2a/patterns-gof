<?php

namespace App\Factories\Builder;

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

    public function cook()
    {
        if (empty($this->ingredients)) {
            throw new InvalidIngredientException("No ingredient supplied.");
        }
        $layers = ["dough"] + $this->ingredients;
        $this->reset();
        return implode("+", $layers);

    }

    public function reset()
    {
        $this->ingredients = [];
    }
}

