<?php

namespace App\Models\Calculator\SoapEnvelope12\Messages;

/**
 * Class representing MultiplyOutput
 */
class MultiplyOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{
    /**
     * @var \App\Models\Calculator\SoapParts\MultiplyOutput $body
     */
    private $body = null;

    /**
     * @var \App\Models\Calculator\SoapEnvelope12\Headers\MultiplyOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \App\Models\Calculator\SoapParts\MultiplyOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \App\Models\Calculator\SoapParts\MultiplyOutput $body
     * @return self
     */
    public function setBody(\App\Models\Calculator\SoapParts\MultiplyOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \App\Models\Calculator\SoapEnvelope12\Headers\MultiplyOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \App\Models\Calculator\SoapEnvelope12\Headers\MultiplyOutput $header
     * @return self
     */
    public function setHeader(\App\Models\Calculator\SoapEnvelope12\Headers\MultiplyOutput $header)
    {
        $this->header = $header;
        return $this;
    }
}

