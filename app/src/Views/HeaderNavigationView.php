<?php

namespace App\Views;
class HeaderNavigationView
{
    public function __construct(
        private string $title,
        private array $routes
    ) {
    }

    public function render(): void
    {
        $navigationLinks = $this->getNavigationLinks();
        include __DIR__ . '/Templates/HeaderTemplate.php';
    }

    public function getNavigationLinks(): string
    {
        $links = '';
        foreach ($this->routes as $route => $cName) {
            $title = $cName::$name;
            $links .= "<li><a href='$route'>$title</a></li>";
        }

        return $links;
    }
}