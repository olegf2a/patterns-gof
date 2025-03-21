<?php

namespace App\Models\Calculator\SoapEnvelope\Messages;

/**
 * Class representing DivideInput
 */
class DivideInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{
    /**
     * @var \App\Models\Calculator\SoapParts\DivideInput $body
     */
    private $body = null;

    /**
     * @var \App\Models\Calculator\SoapEnvelope\Headers\DivideInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \App\Models\Calculator\SoapParts\DivideInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \App\Models\Calculator\SoapParts\DivideInput $body
     * @return self
     */
    public function setBody(\App\Models\Calculator\SoapParts\DivideInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \App\Models\Calculator\SoapEnvelope\Headers\DivideInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \App\Models\Calculator\SoapEnvelope\Headers\DivideInput $header
     * @return self
     */
    public function setHeader(\App\Models\Calculator\SoapEnvelope\Headers\DivideInput $header)
    {
        $this->header = $header;
        return $this;
    }
}

