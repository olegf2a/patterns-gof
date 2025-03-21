<?php

namespace App\Models\Calculator\SoapEnvelope\Messages;

/**
 * Class representing MultiplyInput
 */
class MultiplyInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{
    /**
     * @var \App\Models\Calculator\SoapParts\MultiplyInput $body
     */
    private $body = null;

    /**
     * @var \App\Models\Calculator\SoapEnvelope\Headers\MultiplyInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \App\Models\Calculator\SoapParts\MultiplyInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \App\Models\Calculator\SoapParts\MultiplyInput $body
     * @return self
     */
    public function setBody(\App\Models\Calculator\SoapParts\MultiplyInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \App\Models\Calculator\SoapEnvelope\Headers\MultiplyInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \App\Models\Calculator\SoapEnvelope\Headers\MultiplyInput $header
     * @return self
     */
    public function setHeader(\App\Models\Calculator\SoapEnvelope\Headers\MultiplyInput $header)
    {
        $this->header = $header;
        return $this;
    }
}

