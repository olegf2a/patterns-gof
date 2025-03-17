<?php

namespace App\Patterns\Factories\Builder;

use App\Patterns\Factories\Builder\Exceptions\InvalidIngredientException;

class Pizza implements PizzaInterface
{
    /**
     * @var string []
     */
    private $ingredients = [];

    public function addIngredient($ingredient)
    {
        if (!in_array($ingredient, self::SUPPORTED_INGREDIENTS)) {
            throw new InvalidIngredientException("Invalid ingredient {$ingredient}.");
        }
        $this->ingredients[] = $ingredient;
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

