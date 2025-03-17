<?php

namespace App\Patterns\Factories\Builder;

interface PizzaInterface
{
    public const INGREDIENT_CHEESE = "Cheese";
    public const INGREDIENT_BEACON = "Beacon";
    public const INGREDIENT_PINEAPPLE = "Pineapple";
    public const INGREDIENT_MUSHROOM = "Mushroom";
    public const INGREDIENT_SEAFOOD = "SeaFood";

    public const SUPPORTED_INGREDIENTS = [
        self::INGREDIENT_CHEESE,
        self::INGREDIENT_BEACON,
        self::INGREDIENT_PINEAPPLE,
        self::INGREDIENT_MUSHROOM,
        self::INGREDIENT_SEAFOOD,
    ];

    public function addIngredient($ingredient);

    public function validateState();

    public function represent();
}
