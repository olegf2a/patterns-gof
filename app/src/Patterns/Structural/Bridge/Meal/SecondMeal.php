<?php

namespace App\Patterns\Structural\Bridge\Meal;

class SecondMeal extends AbstractMeal
{
    public function represent(): string
    {
        /**
         * That method identifies self as super difficult rendering method
         */
        return sprintf(
            "Second meal, that contains ingredients: %s",
            implode(",", $this->ingredients)
        );
    }
}
