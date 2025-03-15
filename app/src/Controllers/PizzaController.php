<?php

namespace App\Controllers;

use App\Factories\Builder\InvalidIngredientException;
use App\Factories\Builder\PizzaBuilder;
use App\Factories\Builder\PizzaInterface;
use App\Views\PizzaView;


class PizzaController extends AbstractController
{
    public static $name = 'Pizza';

    public function index(): void
    {
        parent::index();
        $pizza = null;
        $error = null;
        try {
            $pizza = $this->cookPizza($this->getIngredients());
        } catch (InvalidIngredientException $exception) {
            $error = $exception->getMessage();
        }
        $view = new PizzaView(PizzaInterface::SUPPORTED_INGREDIENTS, $pizza, $error);
        $view->render();
        parent::footer();
    }

    private function cookPizza($ingredients)
    {
        if (empty($ingredients)) {
            return null;
        }
        $builder = new PizzaBuilder($ingredients);
        $pizza = $builder
            ->setIngredients($ingredients)
            ->preparePizza();
        return $pizza->cook();
    }

    private function getIngredients()
    {
        return $this->post["ingredients"] ?? [];
    }
}
