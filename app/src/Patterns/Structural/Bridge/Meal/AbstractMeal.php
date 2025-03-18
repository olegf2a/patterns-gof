<?php

namespace App\Patterns\Structural\Bridge\Meal;

abstract class AbstractMeal implements MealInterface
{
    protected array $ingredients = [];

    public function addIngredient(string $value): MealInterface
    {
        $this->ingredients[] = $value;
        return $this;
    }
}
