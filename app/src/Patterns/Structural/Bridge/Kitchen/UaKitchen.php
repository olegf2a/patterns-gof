<?php

namespace App\Patterns\Structural\Bridge\Kitchen;


class UaKitchen extends AbstractKitchen
{
    public function getAvailableMeatIngredients(): array
    {
        return [
            "borshch",
            "pelmeny",
            "salo",
        ];
    }

    public function getAvailableSideDishIngredients(): array
    {
        return [
            "derynu",
            "grechka",
            "rice"
        ];
    }

    public function getAvailableSweatIngredients(): array
    {
        return [
            "medovik",
            "kompot",
        ];
    }
}
