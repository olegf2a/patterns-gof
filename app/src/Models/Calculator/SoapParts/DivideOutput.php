<?php

namespace App\Models\Calculator\SoapParts;

/**
 * Class representing DivideOutput
 */
class DivideOutput
{
    /**
     * @var \App\Models\Calculator\DivideResponse $divideResponse
     */
    private $divideResponse = null;

    /**
     * Gets as divideResponse
     *
     * @return \App\Models\Calculator\DivideResponse
     */
    public function getDivideResponse()
    {
        return $this->divideResponse;
    }

    /**
     * Sets a new divideResponse
     *
     * @param \App\Models\Calculator\DivideResponse $divideResponse
     * @return self
     */
    public function setDivideResponse(\App\Models\Calculator\DivideResponse $divideResponse)
    {
        $this->divideResponse = $divideResponse;
        return $this;
    }
}

