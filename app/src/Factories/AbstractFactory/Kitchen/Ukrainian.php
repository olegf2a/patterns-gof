<?php

namespace App\Factories\AbstractFactory\Kitchen;

class Ukrainian implements KitchenInterface
{
    public function prepareMainMeal(): array
    {
        return [
            'Borshch',
            'Salo',
            'Garlic'
        ];
    }

    public function getBeverage(): string
    {
        return 'Medovuha';
    }

    public function getDessert(): string
    {
        return 'Napoleon';
    }
}
