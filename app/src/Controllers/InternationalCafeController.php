<?php

namespace App\Controllers;

use App\Factories\AbstractFactory\Factory\JapanKitchenFactory;
use App\Factories\AbstractFactory\Factory\KitchenFactoryInterface;
use App\Factories\AbstractFactory\Factory\UkrainianKitchenFactory;
use App\Factories\AbstractFactory\Factory\UsaKitchenFactory;
use App\Factories\AbstractFactory\Kitchen\KitchenInterface;
use App\Factories\Cooker\CookerCreator;
use App\Factories\Cooker\CookerInterface;

class InternationalCafeController extends AbstractController
{
    public static $name = 'International Cafe';

    public function index(): void
    {
        parent::index();
        /** @var KitchenFactoryInterface $factory */
        $factory = $this->getKitchenFactory($this->get['locale'] ?? '');
        /** @var KitchenInterface $kitchen */
        $kitchen = $factory->createKitchen();

        print_r(
            [
                "main_meal" => $kitchen->prepareMainMeal(),
                "beverage" => $kitchen->getBeverage(),
                "dessert" => $kitchen->getdessert(),
            ]
        );

        parent::footer();
    }

    public function getKitchenFactory($type): KitchenFactoryInterface
    {

        switch ($type) {
            case 'us':
                return new UsaKitchenFactory();
            case 'ua':
                return new UkrainianKitchenFactory();
            case 'jp':
                return new JapanKitchenFactory();
        }
        /**
         * Default kitchen.
         */
        return new UkrainianKitchenFactory();
    }
}
