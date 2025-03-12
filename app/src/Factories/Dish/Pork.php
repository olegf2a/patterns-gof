<?php

namespace App\Factories\Dish;

class Pork extends AbstractDish
{

    public function cook(?string $get = ''): void
    {
        echo "Cooking Pork" . " with $get" . PHP_EOL;
    }
}