<?php

namespace App\Models\Calculator\SoapEnvelope\Messages;

/**
 * Class representing SubtractInput
 */
class SubtractInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{
    /**
     * @var \App\Models\Calculator\SoapParts\SubtractInput $body
     */
    private $body = null;

    /**
     * @var \App\Models\Calculator\SoapEnvelope\Headers\SubtractInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \App\Models\Calculator\SoapParts\SubtractInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \App\Models\Calculator\SoapParts\SubtractInput $body
     * @return self
     */
    public function setBody(\App\Models\Calculator\SoapParts\SubtractInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \App\Models\Calculator\SoapEnvelope\Headers\SubtractInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \App\Models\Calculator\SoapEnvelope\Headers\SubtractInput $header
     * @return self
     */
    public function setHeader(\App\Models\Calculator\SoapEnvelope\Headers\SubtractInput $header)
    {
        $this->header = $header;
        return $this;
    }
}

