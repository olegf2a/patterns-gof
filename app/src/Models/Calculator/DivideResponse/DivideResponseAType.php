<?php

namespace App\Models\Calculator\DivideResponse;

/**
 * Class representing DivideResponseAType
 */
class DivideResponseAType
{
    /**
     * @var int $divideResult
     */
    private $divideResult = null;

    /**
     * Gets as divideResult
     *
     * @return int
     */
    public function getDivideResult()
    {
        return $this->divideResult;
    }

    /**
     * Sets a new divideResult
     *
     * @param int $divideResult
     * @return self
     */
    public function setDivideResult($divideResult)
    {
        $this->divideResult = $divideResult;
        return $this;
    }
}

