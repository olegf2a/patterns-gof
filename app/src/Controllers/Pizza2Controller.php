<?php

namespace App\Controllers;

use App\Patterns\Structural\Decorator\BasePizza;
use App\Patterns\Structural\Decorator\BeaconDecorator;
use App\Patterns\Structural\Decorator\CheeseDecorator;
use App\Patterns\Structural\Decorator\MushroomDecorator;
use App\Patterns\Structural\Decorator\PineappleDecorator;
use App\Patterns\Structural\Decorator\PizzaInterface;
use App\Patterns\Structural\Decorator\SeaFoodDecorator;
use App\Views\Pizza2View;


class Pizza2Controller extends AbstractController
{
    public static $name = 'Pizza (Decorator)';

    public function index(): void
    {
        parent::index();

        $ingredientPrises = [
            BeaconDecorator::ADDING_NAME => BeaconDecorator::ADDING_PRICE,
            CheeseDecorator::ADDING_NAME => CheeseDecorator::ADDING_PRICE,
            MushroomDecorator::ADDING_NAME => MushroomDecorator::ADDING_PRICE,
            PineappleDecorator::ADDING_NAME => PineappleDecorator::ADDING_PRICE,
            SeaFoodDecorator::ADDING_NAME => SeaFoodDecorator::ADDING_PRICE,
        ];

        $pizza = new BasePizza();

        if ($this->getIngredients()) {
            foreach ($this->getIngredients() as $name => $qty) {
                if (empty($qty)) {
                    continue;
                }
                while ($qty > 0) {
                    $pizza = $this->getDecorator($name, $pizza);
                    $qty--;
                }
            }
        }

        $view = new Pizza2View(
            $pizza,
            $ingredientPrises
        );
        $view->render();
        parent::footer();
    }

    private function getIngredients()
    {
        return $this->post["ingredients"] ?? [];
    }

    private function getDecorator($name, $pizza): PizzaInterface
    {
        switch ($name) {
            case $name == BeaconDecorator::ADDING_NAME:
                return new BeaconDecorator($pizza);
            case $name == CheeseDecorator::ADDING_NAME:
                return new CheeseDecorator($pizza);
            case $name == MushroomDecorator::ADDING_NAME:
                return new MushroomDecorator($pizza);
            case $name == PineappleDecorator::ADDING_NAME:
                return new PineappleDecorator($pizza);
            case $name == SeaFoodDecorator::ADDING_NAME:
                return new SeaFoodDecorator($pizza);
        }
        return $pizza;
    }
}
