<?php

namespace App\Models\Calculator\SoapEnvelope12\Messages;

/**
 * Class representing DivideOutput
 */
class DivideOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{
    /**
     * @var \App\Models\Calculator\SoapParts\DivideOutput $body
     */
    private $body = null;

    /**
     * @var \App\Models\Calculator\SoapEnvelope12\Headers\DivideOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \App\Models\Calculator\SoapParts\DivideOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \App\Models\Calculator\SoapParts\DivideOutput $body
     * @return self
     */
    public function setBody(\App\Models\Calculator\SoapParts\DivideOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \App\Models\Calculator\SoapEnvelope12\Headers\DivideOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \App\Models\Calculator\SoapEnvelope12\Headers\DivideOutput $header
     * @return self
     */
    public function setHeader(\App\Models\Calculator\SoapEnvelope12\Headers\DivideOutput $header)
    {
        $this->header = $header;
        return $this;
    }
}

