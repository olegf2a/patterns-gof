<?php

namespace App\Factories\Dish;

class Salmon extends AbstractDish
{

    public function cook(?string $get = ''): void
    {
        echo "Cooking Salmon" . " with $get" . PHP_EOL;
    }
}