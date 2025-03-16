<?php

namespace App\Patterns\Factories\AbstractFactory\Factory;

use App\Patterns\Factories\AbstractFactory\Kitchen\KitchenInterface;
use App\Patterns\Factories\AbstractFactory\Kitchen\Ukrainian;

class UkrainianKitchenFactory implements KitchenFactoryInterface
{
    public function createKitchen(): KitchenInterface
    {
        return new Ukrainian();
    }
}
