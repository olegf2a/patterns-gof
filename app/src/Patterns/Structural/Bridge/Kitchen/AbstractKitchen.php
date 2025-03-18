<?php

namespace App\Patterns\Structural\Bridge\Kitchen;

use App\Patterns\Structural\Bridge\Meal\MealInterface;

abstract class AbstractKitchen implements KitchenInterface
{
    protected array $ingredients = [];

    public function __construct(
        private MealInterface $meal
    ) {
    }

    public function setIngredients(array $ingredients): KitchenInterface
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    public function makeMeal(): MealInterface
    {
        foreach ($this->ingredients as $ingredient) {
            $this->meal->addIngredient($ingredient);
        }
        return $this->meal;
    }
}
