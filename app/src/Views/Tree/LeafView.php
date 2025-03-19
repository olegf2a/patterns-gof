<?php

namespace App\Views\Tree;

use App\Patterns\Structural\Composite\Leafe;


class LeafView
{
    public function __construct(
        private Leafe $element
    ) {
    }

    public function getLeaf(): Leafe
    {
        return $this->element;
    }

    public function render(): string
    {
        return "<li>leaf value:" . $this->element->getValue() . "</li>";
    }
}
