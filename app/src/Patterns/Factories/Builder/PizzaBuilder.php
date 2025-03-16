<?php

namespace App\Patterns\Factories\Builder;


use App\Patterns\Factories\Builder\Exceptions\InvalidIngredientException;

class PizzaBuilder
{
    private array $ingredients = [];

    private PizzaInterface|null $pizza = null;

    public function reset()
    {
        $this->pizza = null;
        $this->ingredients = [];
    }

    public function setIngredients(array $ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    public function cookPizza(): PizzaInterface
    {
        if (!$this->pizza) {
            $this->createPizza();
        }

        foreach ($this->ingredients as $ingredient => $qty) {
            if (empty($ingredient)) {
                continue;
            }
            for ($i = 0 ; $i <= $qty; $i++) {
                $this->addIngredient($ingredient);
            }
        }
        $this->pizza->validateState();
        return $this->pizza;
    }

    private function validateIngredient($ingredient)
    {
        if (!in_array($ingredient, PizzaInterface::SUPPORTED_INGREDIENTS)) {
            throw new InvalidIngredientException("Ingredient {$ingredient} is not available.");
        }
    }

    private function addIngredient($ingredient)
    {
        $this->validateIngredient($ingredient);
        switch ($ingredient)
        {
            case PizzaInterface::INGREDIENT_BEACON:
                $this->pizza->addBeacon();
                return;
            case PizzaInterface::INGREDIENT_CHEESE:
                $this->pizza->addCheese();
                return;
            case PizzaInterface::INGREDIENT_MUSHROOM:
                $this->pizza->addMushroom();
                return;
            case PizzaInterface::INGREDIENT_PINEAPPLE:
                $this->pizza->addPineapple();
                return;
            case PizzaInterface::INGREDIENT_SEAFOOD:
                $this->pizza->addSeaFood();
                return;
        }
    }

    private function createPizza(): void
    {
        $this->pizza = new Pizza();
    }
}

