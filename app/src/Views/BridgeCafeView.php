<?php

namespace App\Views;

use App\Patterns\Structural\Adapter\WeatherInterface;
use App\Patterns\Structural\Bridge\Meal\MealInterface;

class BridgeCafeView
{
    public function __construct(
        private MealInterface $meal
    ) {
    }

    public function getMeal(): MealInterface
    {
        return $this->meal;
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/bridge-cafe-template.phtml';
    }
}
