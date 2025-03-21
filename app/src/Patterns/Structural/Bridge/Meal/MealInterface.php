<?php

namespace App\Patterns\Structural\Bridge\Meal;

interface MealInterface
{
    public function addIngredient(string $value): MealInterface;

    public function represent(): string;
}
