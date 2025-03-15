<?php

namespace App\Controllers;

use App\Factories\Cooker\CookerCreator;
use App\Factories\Cooker\CookerInterface;
use App\Factories\Prototype\Car;
use App\Factories\Prototype\CarDealer;

class CarDealerController extends AbstractController
{
    public static $name = 'Car Dealer';

    public function index(): void
    {
        parent::index();

        $dealer = new CarDealer();
        $colors = ['green, blue, pink'];

        echo "Available cars:";
        foreach ($colors as $color) {
            $car = $dealer->createPassenger($color, sprintf("%s-%s", rand(11, 99), rand(111, 999)));
            echo sprintf(
                "Type: %s, color: %s, license plate: %s",
                $car->getCarType(),
                $car->getColor(),
                $car->getLicencePlate()
            );
        }
        foreach ($colors as $color) {
            $car = $dealer->createSuv($color, sprintf("%s-%s", rand(11, 99), rand(111, 999)));
            echo sprintf(
                "Type: %s, color: %s, license plate: %s",
                $car->getCarType(),
                $car->getColor(),
                $car->getLicencePlate()
            );
        }
        foreach ($colors as $color) {
            $car = $dealer->createCargo($color, sprintf("%s-%s", rand(11, 99), rand(111, 999)));
            echo sprintf(
                "Type: %s, color: %s, license plate: %s",
                $car->getCarType(),
                $car->getColor(),
                $car->getLicencePlate()
            );
        }
        
        parent::footer();
    }
}
