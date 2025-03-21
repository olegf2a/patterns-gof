<?php

namespace App\Patterns\Structural\Bridge\Kitchen;

use App\Patterns\Structural\Bridge\Meal\MealInterface;

class UsKitchen extends AbstractKitchen
{
    public function getAvailableMeatIngredients(): array
    {
        return [
            "stake",
            "ribs",
            "meet-bolls",
        ];
    }

    public function getAvailableSideDishIngredients(): array
    {
        return [
            "fry-potato",
            "fry-corn"
        ];
    }

    public function getAvailableSweatIngredients(): array
    {
        return [
            "pancake",
            "ice-cream",
            "coca-cola"
        ];
    }
}
