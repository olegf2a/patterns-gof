<?php

namespace App\Patterns\Factories\Cooker;

class HotdogCooker implements CookerInterface
{
    public function prepareMeal(): string
    {
        return 'Tasty hotdog';
    }
}
