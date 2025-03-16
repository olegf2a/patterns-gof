<?php

namespace App\Patterns\Structural\Adapter;

interface WeatherInterface
{
    public function weeklyWeather(): array;

    public function tomorrowWeather(): string;
}
