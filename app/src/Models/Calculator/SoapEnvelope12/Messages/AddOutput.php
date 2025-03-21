<?php

namespace App\Models\Calculator\SoapEnvelope12\Messages;

/**
 * Class representing AddOutput
 */
class AddOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{
    /**
     * @var \App\Models\Calculator\SoapParts\AddOutput $body
     */
    private $body = null;

    /**
     * @var \App\Models\Calculator\SoapEnvelope12\Headers\AddOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \App\Models\Calculator\SoapParts\AddOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \App\Models\Calculator\SoapParts\AddOutput $body
     * @return self
     */
    public function setBody(\App\Models\Calculator\SoapParts\AddOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \App\Models\Calculator\SoapEnvelope12\Headers\AddOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \App\Models\Calculator\SoapEnvelope12\Headers\AddOutput $header
     * @return self
     */
    public function setHeader(\App\Models\Calculator\SoapEnvelope12\Headers\AddOutput $header)
    {
        $this->header = $header;
        return $this;
    }
}

