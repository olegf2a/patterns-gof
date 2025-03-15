<?php

namespace App\Factories\AbstractFactory\Kitchen;

class Japan implements KitchenInterface
{
    public function prepareMainMeal(): array
    {
        return [
            'Sushi',
            'Soy Souse',
            'Wasabi'
        ];
    }

    public function getBeverage(): string
    {
        return 'Sōke';
    }

    public function getDessert(): string
    {
        return 'Dorayaki';
    }
}
