<?php

namespace App\Views;

use App\Patterns\Factories\Singleton\Singleton;

class SingletonView
{
    /**
     * @param array $objects
     */
    public function __construct(
        private array $objects,
        private string $error
    ) {
    }

    /**
     * @return Singleton[]
     */
    public function getObjects(): array
    {
        return $this->objects;
    }

    /**
     * @return
     */
    public function getError()
    {
        return $this->error;
    }

    public function render(): void
    {
        include __DIR__ . '/Templates/singleton-template.phtml';
    }
}
