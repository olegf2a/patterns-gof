<?php

namespace App\Factories\Builder;

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

    public function addCheese();

    public function addBeacon();

    public function addPineapple();

    public function addMushroom();

    public function addSeaFood();

    public function cook();

    public function reset();
}
