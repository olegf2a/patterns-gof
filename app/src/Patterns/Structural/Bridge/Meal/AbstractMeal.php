<?php

namespace App\Patterns\Structural\Bridge\Meal;

abstract class AbstractMeal implements MealInterface
{
    protected const MEAL_TYPE = '';

    private array $ingredients = [];

    public function addIngredient(string $value): MealInterface
    {
        $this->ingredients[] = $value;
        return $this;
    }

    public function represent(): string
    {
        return sprintf(
            "%s, ingredients: %s",
            static::MEAL_TYPE,
            implode(",", $this->ingredients)
        );
    }

}
