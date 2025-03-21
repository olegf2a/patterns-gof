<?php

namespace App\Models\Calculator\Subtract;

/**
 * Class representing SubtractAType
 */
class SubtractAType
{
    /**
     * @var int $intA
     */
    private $intA = null;

    /**
     * @var int $intB
     */
    private $intB = null;

    /**
     * Gets as intA
     *
     * @return int
     */
    public function getIntA()
    {
        return $this->intA;
    }

    /**
     * Sets a new intA
     *
     * @param int $intA
     * @return self
     */
    public function setIntA($intA)
    {
        $this->intA = $intA;
        return $this;
    }

    /**
     * Gets as intB
     *
     * @return int
     */
    public function getIntB()
    {
        return $this->intB;
    }

    /**
     * Sets a new intB
     *
     * @param int $intB
     * @return self
     */
    public function setIntB($intB)
    {
        $this->intB = $intB;
        return $this;
    }
}

