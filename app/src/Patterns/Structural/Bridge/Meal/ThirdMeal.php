<?php

namespace App\Patterns\Structural\Bridge\Meal;

class ThirdMeal extends AbstractMeal
{
    public function represent(): string
    {
        /**
         * That method identifies self as super difficult rendering method
         */
        return sprintf(
            "Third meal, that contains ingredients: %s",
            implode(",", $this->ingredients)
        );
    }}
