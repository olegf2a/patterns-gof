<?php

namespace App\Models\Calculator\MultiplyResponse;

/**
 * Class representing MultiplyResponseAType
 */
class MultiplyResponseAType
{
    /**
     * @var int $multiplyResult
     */
    private $multiplyResult = null;

    /**
     * Gets as multiplyResult
     *
     * @return int
     */
    public function getMultiplyResult()
    {
        return $this->multiplyResult;
    }

    /**
     * Sets a new multiplyResult
     *
     * @param int $multiplyResult
     * @return self
     */
    public function setMultiplyResult($multiplyResult)
    {
        $this->multiplyResult = $multiplyResult;
        return $this;
    }
}

