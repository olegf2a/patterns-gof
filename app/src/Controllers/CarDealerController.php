<?php

namespace App\Controllers;

use App\Patterns\Factories\Prototype\Car;
use App\Views\DealerView;

class CarDealerController extends AbstractController
{
    public static $name = 'Car Dealer';

    public function index(): void
    {
        parent::index();

        Car::initTypes();

        $suv = Car::getSuv("red", sprintf("%s-%s", rand(11, 99), rand(111, 999)));
        $passenger = Car::getPassenger("blue", sprintf("%s-%s", rand(11, 99), rand(111, 999)));
        $cargo = Car::getCargo("white", sprintf("%s-%s", rand(11, 99), rand(111, 999)));


        $view = new DealerView([$suv, $passenger, $cargo]);
        $view->render();

        parent::footer();
    }
}
