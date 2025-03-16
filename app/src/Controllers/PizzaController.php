<?php

namespace App\Controllers;

use App\Factories\Builder\Director;
use App\Factories\Builder\Exceptions\InvalidIngredientException;
use App\Factories\Builder\PizzaBuilder;
use App\Factories\Builder\PizzaInterface;
use App\Views\PizzaView;


class PizzaController extends AbstractController
{
    public static $name = 'Pizza';

    public function index(): void
    {

        $director = new Director(new PizzaBuilder());
        parent::index();
        $pizza = null;
        $error = null;
        try {
            $pizza = $director->makePizza($this->getIngredients());
        } catch (InvalidIngredientException $exception) {
            $error = $exception->getMessage();
        }
        $view = new PizzaView(PizzaInterface::SUPPORTED_INGREDIENTS, $pizza, $error);
        $view->render();
        parent::footer();
    }

    private function getIngredients()
    {
        return $this->post["ingredients"] ?? [];
    }
}
