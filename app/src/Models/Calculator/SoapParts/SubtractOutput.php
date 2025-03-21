<?php

namespace App\Models\Calculator\SoapParts;

/**
 * Class representing SubtractOutput
 */
class SubtractOutput
{
    /**
     * @var \App\Models\Calculator\SubtractResponse $subtractResponse
     */
    private $subtractResponse = null;

    /**
     * Gets as subtractResponse
     *
     * @return \App\Models\Calculator\SubtractResponse
     */
    public function getSubtractResponse()
    {
        return $this->subtractResponse;
    }

    /**
     * Sets a new subtractResponse
     *
     * @param \App\Models\Calculator\SubtractResponse $subtractResponse
     * @return self
     */
    public function setSubtractResponse(\App\Models\Calculator\SubtractResponse $subtractResponse)
    {
        $this->subtractResponse = $subtractResponse;
        return $this;
    }
}

