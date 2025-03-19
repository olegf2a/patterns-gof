<?php

namespace App\Views;

use App\Patterns\Structural\Composite\ElementInterface;
use App\Patterns\Structural\Composite\Leafe;
use App\Patterns\Structural\Composite\Node;
use App\Views\Tree\LeafView;
use App\Views\Tree\NodeView;


class TreeView
{
    public function __construct(
        private ElementInterface $element,
        private string $message
    ) {
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function render()
    {
        include __DIR__ . '/Templates/tree/tree-template.phtml';
    }

    public function renderElements(): string
    {
        if ($this->element instanceof Leafe) {
            $view = new LeafView($this->element);
            return $view->render();
        } elseif ($this->element instanceof Node) {
            $view = new NodeView($this->element);
            return $view->render();
        }
        return '';
    }
}
