<?php

namespace App\Patterns\Structural\Bridge\Meal;

class Dessert extends AbstractMeal
{
    public function represent(): string
    {
        /**
         * That method identifies self as super difficult rendering method
         */
        return sprintf(
            "It is a dessert that consist of %s",
            implode(",", $this->ingredients)
        );
    }}
