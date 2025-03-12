<?php

namespace App\Factories\AbstractFactory\Kitchen;

interface KitchenInterface
{
    public function prepareMainMeal(): array;

    public function getBeverage(): string;

    public function getDessert(): string;
}
