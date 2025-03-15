<?php

namespace App\Factories\AbstractFactory\Kitchen;

class Usa implements KitchenInterface
{
    public function prepareMainMeal(): array
    {
        return [
            'Hamburger',
            'Free',
            'Hot Souse'
        ];
    }

    public function getBeverage(): string
    {
        return 'Coca-Cola';
    }

    public function getDessert(): string
    {
        return 'Ice Cream';
    }
}
