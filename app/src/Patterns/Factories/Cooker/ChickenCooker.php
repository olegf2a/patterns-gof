<?php

namespace App\Patterns\Factories\Cooker;

class ChickenCooker implements CookerInterface
{
    public function prepareMeal(): string
    {
        return 'Roasted chicken';
    }
}
