<?php

namespace App\Patterns\Structural\Composite;

class Node implements ElementInterface
{
    /**
     * @var ElementInterface[]
     */
    private array $children = [];

    public function __construct(
        private int $value = 0
    ) {
    }

    public function operation(int $delta): int
    {
        foreach ($this->children as $child) {
            $child->operation($delta);
        }
        $this->value += $delta;
        return $this->value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function addChild(ElementInterface $element): Node
    {
        $this->children[spl_object_id($element)] = $element;
        return $this;
    }

    public function removeChild(ElementInterface $element): Node
    {
        unset($this->children[spl_object_id($element)]);
        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }
}
