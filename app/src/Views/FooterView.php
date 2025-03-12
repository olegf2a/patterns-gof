<?php

namespace App\Views;
class FooterView
{
    public function __construct() {

    }

    public function render(): void
    {
        include __DIR__ . '/Templates/FooterTemplate.php';
    }
}