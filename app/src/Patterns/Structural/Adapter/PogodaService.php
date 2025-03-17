<?php

namespace App\Patterns\Structural\Adapter;

class PogodaService
{
    public function tygodniowaPogoda()
    {
        return [
            1 => "+12",
            2 => "+10",
            3 => "+14",
            4 => "+18",
            5 => "+11",
        ];
    }

    public function jutroPogoda()
    {
        return "+12";
    }
}
