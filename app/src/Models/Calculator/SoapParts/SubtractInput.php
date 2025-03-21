<?php

namespace App\Models\Calculator\SoapParts;

/**
 * Class representing SubtractInput
 */
class SubtractInput
{
    /**
     * @var \App\Models\Calculator\Subtract $subtract
     */
    private $subtract = null;

    /**
     * Gets as subtract
     *
     * @return \App\Models\Calculator\Subtract
     */
    public function getSubtract()
    {
        return $this->subtract;
    }

    /**
     * Sets a new subtract
     *
     * @param \App\Models\Calculator\Subtract $subtract
     * @return self
     */
    public function setSubtract(\App\Models\Calculator\Subtract $subtract)
    {
        $this->subtract = $subtract;
        return $this;
    }
}

