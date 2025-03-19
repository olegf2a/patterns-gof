<?php

namespace App\Views\Tree;

use App\Patterns\Structural\Composite\Leafe;
use App\Patterns\Structural\Composite\Node;


class NodeView
{
    public function __construct(
        private Node $element
    ) {
    }

    public function render(): string
    {
        $output = "<ul>";
        $output .= "<li>node value: " . $this->element->getValue() . "</li>";
        $output .= $this->getChildrenOutput();
        $output .= "</ul>";
        return $output;
    }

    private function getChildrenOutput(): string
    {
        $output = '';
        foreach ($this->element->getChildren() as $child) {
            if ($child instanceof Leafe) {
                $view = new LeafView($child);
                $output .= $view->render();
            } elseif ($child instanceof Node) {
                $view = new NodeView($child);
                $output .= $view->render();
            }
        }

        return $output;
    }
}
