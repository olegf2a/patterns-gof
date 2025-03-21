<?php

namespace App\Models\Calculator\SoapParts;

/**
 * Class representing DivideInput
 */
class DivideInput
{
    /**
     * @var \App\Models\Calculator\Divide $divide
     */
    private $divide = null;

    /**
     * Gets as divide
     *
     * @return \App\Models\Calculator\Divide
     */
    public function getDivide()
    {
        return $this->divide;
    }

    /**
     * Sets a new divide
     *
     * @param \App\Models\Calculator\Divide $divide
     * @return self
     */
    public function setDivide(\App\Models\Calculator\Divide $divide)
    {
        $this->divide = $divide;
        return $this;
    }
}

