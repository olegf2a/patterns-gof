<?php

namespace App\Models\Calculator\SoapParts;

/**
 * Class representing MultiplyOutput
 */
class MultiplyOutput
{
    /**
     * @var \App\Models\Calculator\MultiplyResponse $multiplyResponse
     */
    private $multiplyResponse = null;

    /**
     * Gets as multiplyResponse
     *
     * @return \App\Models\Calculator\MultiplyResponse
     */
    public function getMultiplyResponse()
    {
        return $this->multiplyResponse;
    }

    /**
     * Sets a new multiplyResponse
     *
     * @param \App\Models\Calculator\MultiplyResponse $multiplyResponse
     * @return self
     */
    public function setMultiplyResponse(\App\Models\Calculator\MultiplyResponse $multiplyResponse)
    {
        $this->multiplyResponse = $multiplyResponse;
        return $this;
    }
}

