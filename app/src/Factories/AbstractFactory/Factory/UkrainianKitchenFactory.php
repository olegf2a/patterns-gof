<?php

namespace App\Factories\AbstractFactory\Factory;

use App\Factories\AbstractFactory\Kitchen\KitchenInterface;
use App\Factories\AbstractFactory\Kitchen\Ukrainian;

class UkrainianKitchenFactory implements KitchenFactoryInterface
{
    public function createKitchen(): KitchenInterface
    {
        return new Ukrainian();
    }
}
