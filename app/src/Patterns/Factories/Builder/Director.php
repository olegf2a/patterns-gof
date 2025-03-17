<?php

namespace App\Patterns\Factories\Builder;


class Director
{
    public function __construct(
        private PizzaBuilder $builder
    ) {
    }

    public function makePizza($ingredient): PizzaInterface
    {
        $this->builder->reset();
        $this->builder->setIngredients($ingredient);
        return $this->builder->cookPizza();
    }
}

