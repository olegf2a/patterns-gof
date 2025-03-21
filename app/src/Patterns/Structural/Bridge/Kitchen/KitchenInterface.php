<?php

namespace App\Patterns\Structural\Bridge\Kitchen;

use App\Patterns\Structural\Bridge\Meal\MealInterface;

interface KitchenInterface
{
    public function setIngredients(array $ingredients): KitchenInterface;

    public function makeMeal(): MealInterface;

    public function getAvailableMeatIngredients(): array;
    public function getAvailableSideDishIngredients(): array;
    public function getAvailableSweatIngredients(): array;
}
