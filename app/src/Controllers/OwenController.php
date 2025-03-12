<?php

namespace App\Controllers;

use App\Factories\Cooker\CookerCreator;
use App\Factories\Cooker\CookerInterface;

class OwenController extends AbstractController
{
    public static $name = 'Owen';

    public function index(): void
    {
        parent::index();

        foreach (CookerCreator::getAvailable() as $meal) {
            /** @var $cooker CookerInterface */
            $cooker = CookerCreator::getCooker($meal);
            echo $cooker->prepareMeal() . PHP_EOL;
        }

        try {
            CookerCreator::getCooker('ololo');
        } catch (\Exception $exception) {
            echo sprintf("Success test: %s", $exception->getMessage()) . PHP_EOL;
        }

        parent::footer();
    }
}
