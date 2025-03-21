<?php

namespace App\Models\Calculator\SubtractResponse;

/**
 * Class representing SubtractResponseAType
 */
class SubtractResponseAType
{
    /**
     * @var int $subtractResult
     */
    private $subtractResult = null;

    /**
     * Gets as subtractResult
     *
     * @return int
     */
    public function getSubtractResult()
    {
        return $this->subtractResult;
    }

    /**
     * Sets a new subtractResult
     *
     * @param int $subtractResult
     * @return self
     */
    public function setSubtractResult($subtractResult)
    {
        $this->subtractResult = $subtractResult;
        return $this;
    }
}

