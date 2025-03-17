<?php

namespace App\Patterns\Structural\Adapter;

class WeatherService implements WeatherInterface
{
    private PogodaService $pogodaService;
    public function __construct(
        ?PogodaService $pogodaService = null
    ) {
        $this->pogodaService = $pogodaService ?? new PogodaService();
    }

    public function weeklyWeather(): array
    {
        return $this->pogodaService->tygodniowaPogoda();
    }

    public function tomorrowWeather(): string
    {
        return $this->pogodaService->jutroPogoda();
    }
}
