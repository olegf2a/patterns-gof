<?php

namespace App\Models\Calculator\SoapParts;

/**
 * Class representing AddOutput
 */
class AddOutput
{
    /**
     * @var \App\Models\Calculator\AddResponse $addResponse
     */
    private $addResponse = null;

    /**
     * Gets as addResponse
     *
     * @return \App\Models\Calculator\AddResponse
     */
    public function getAddResponse()
    {
        return $this->addResponse;
    }

    /**
     * Sets a new addResponse
     *
     * @param \App\Models\Calculator\AddResponse $addResponse
     * @return self
     */
    public function setAddResponse(\App\Models\Calculator\AddResponse $addResponse)
    {
        $this->addResponse = $addResponse;
        return $this;
    }
}

