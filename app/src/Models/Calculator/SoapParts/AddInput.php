<?php

namespace App\Models\Calculator\SoapParts;

/**
 * Class representing AddInput
 */
class AddInput
{
    /**
     * @var \App\Models\Calculator\Add $add
     */
    private $add = null;

    /**
     * Gets as add
     *
     * @return \App\Models\Calculator\Add
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Sets a new add
     *
     * @param \App\Models\Calculator\Add $add
     * @return self
     */
    public function setAdd(\App\Models\Calculator\Add $add)
    {
        $this->add = $add;
        return $this;
    }
}

