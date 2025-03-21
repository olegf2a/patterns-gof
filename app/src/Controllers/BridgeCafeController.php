<?php

namespace App\Controllers;



use App\Patterns\Structural\Bridge\Kitchen\UsKitchen;
use App\Patterns\Structural\Bridge\Meal\MainMeal;
use App\Views\BridgeCafeView;

class BridgeCafeController extends AbstractController
{
    public static $name = 'Cafe (Bridge)';

    public function index(): void
    {
        parent::index();

        $kitchen = new UsKitchen(new MainMeal());

        $chosenIngredients = [
            $kitchen->getAvailableMeatIngredients()[0],
            $kitchen->getAvailableSideDishIngredients()[1],
        ];

        $kitchen->setIngredients($chosenIngredients);

        $view = new BridgeCafeView($kitchen->makeMeal());
        $view->render();

        parent::footer();
    }
}
