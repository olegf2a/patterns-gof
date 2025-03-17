<?php

namespace App\Views;

use App\Patterns\Structural\Adapter\WeatherInterface;

class WeatherView
{
    public function __construct(
        private WeatherInterface $weather
    ) {
    }

    public function getWeather(): WeatherInterface
    {
        return $this->weather;
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/weather-template.phtml';
    }
}
