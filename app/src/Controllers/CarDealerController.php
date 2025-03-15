<?php

namespace App\Controllers;

use App\Factories\Cooker\CookerCreator;
use App\Factories\Cooker\CookerInterface;
use App\Factories\Prototype\Car;
use App\Factories\Prototype\CarDealer;
use App\Views\DealerView;

class CarDealerController extends AbstractController
{
    public static $name = 'Car Dealer';

    public function index(): void
    {
        parent::index();

        $dealer = new CarDealer();
        $colors = ['green, blue, pink'];
        $cars = [];

        foreach ($colors as $color) {
            $cars[] = $dealer->createPassenger($color, sprintf("%s-%s", rand(11, 99), rand(111, 999)));
        }
        foreach ($colors as $color) {
            $cars[] = $dealer->createSuv($color, sprintf("%s-%s", rand(11, 99), rand(111, 999)));
        }
        foreach ($colors as $color) {
            $cars[] = $dealer->createCargo($color, sprintf("%s-%s", rand(11, 99), rand(111, 999)));
        }

        $view = new DealerView($cars);
        $view->render();

        parent::footer();
    }
}
