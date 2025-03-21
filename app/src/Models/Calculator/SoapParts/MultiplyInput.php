<?php

namespace App\Models\Calculator\SoapParts;

/**
 * Class representing MultiplyInput
 */
class MultiplyInput
{
    /**
     * @var \App\Models\Calculator\Multiply $multiply
     */
    private $multiply = null;

    /**
     * Gets as multiply
     *
     * @return \App\Models\Calculator\Multiply
     */
    public function getMultiply()
    {
        return $this->multiply;
    }

    /**
     * Sets a new multiply
     *
     * @param \App\Models\Calculator\Multiply $multiply
     * @return self
     */
    public function setMultiply(\App\Models\Calculator\Multiply $multiply)
    {
        $this->multiply = $multiply;
        return $this;
    }
}

