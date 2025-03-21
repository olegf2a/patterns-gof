<?php

namespace App\Models\Calculator\AddResponse;

/**
 * Class representing AddResponseAType
 */
class AddResponseAType
{
    /**
     * @var int $addResult
     */
    private $addResult = null;

    /**
     * Gets as addResult
     *
     * @return int
     */
    public function getAddResult()
    {
        return $this->addResult;
    }

    /**
     * Sets a new addResult
     *
     * @param int $addResult
     * @return self
     */
    public function setAddResult($addResult)
    {
        $this->addResult = $addResult;
        return $this;
    }
}

