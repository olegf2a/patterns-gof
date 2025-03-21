<?php

namespace App\Models\Calculator\SoapEnvelope12\Messages;

/**
 * Class representing AddInput
 */
class AddInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{
    /**
     * @var \App\Models\Calculator\SoapParts\AddInput $body
     */
    private $body = null;

    /**
     * @var \App\Models\Calculator\SoapEnvelope12\Headers\AddInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \App\Models\Calculator\SoapParts\AddInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \App\Models\Calculator\SoapParts\AddInput $body
     * @return self
     */
    public function setBody(\App\Models\Calculator\SoapParts\AddInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \App\Models\Calculator\SoapEnvelope12\Headers\AddInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \App\Models\Calculator\SoapEnvelope12\Headers\AddInput $header
     * @return self
     */
    public function setHeader(\App\Models\Calculator\SoapEnvelope12\Headers\AddInput $header)
    {
        $this->header = $header;
        return $this;
    }
}

