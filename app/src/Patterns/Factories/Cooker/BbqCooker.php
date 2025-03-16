<?php

namespace App\Patterns\Factories\Cooker;

class BbqCooker implements CookerInterface
{
    public function prepareMeal(): string
    {
        return 'BBQ + Beer';
    }
}
