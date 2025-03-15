<?php

namespace App\Factories\Prototype;

class Car
{
    /**
     * Constructor.
     *
     * @param string $type
     * @param string $color
     * @param string $licencePlate
     */
    public function __construct(
        private string $type,
        private string $color = "grey",
        private string $licencePlate = '00-000'
    ) {
    }

    public function getCarType()
    {
        return $this->type;
    }

    public function setColor($value)
    {
        $this->color = $value;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setLicencePlate($value)
    {
        $this->licencePlate = $value;
        return $this;
    }

    public function getLicencePlate()
    {
        return $this->licencePlate;
    }
}
