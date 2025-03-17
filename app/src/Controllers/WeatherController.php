<?php

namespace App\Controllers;

use App\Patterns\Factories\Cooker\CookerCreator;
use App\Patterns\Factories\Cooker\CookerInterface;
use App\Patterns\Structural\Adapter\WeatherService;
use App\Views\WeatherView;

class WeatherController extends AbstractController
{
    public static $name = 'Weather';

    public function index(): void
    {
        parent::index();

        $weather = new WeatherService();

        new WeatherView($weather)->render();

        parent::footer();
    }
}
