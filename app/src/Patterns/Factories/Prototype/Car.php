<?php

namespace App\Patterns\Factories\Prototype;

class Car implements CarInterface, CarPrototypeInterface
{
    public const CAR_TYPE_PASSENGER = 'passenger';
    public const CAR_TYPE_SUV = 'SUV';
    public const CAR_TYPE_CARGO = 'cargo';

    protected static Car $passengerType;
    protected static Car $suvType;
    protected static Car $cargoType;

    private $color;
    private $licencePlate;

    /**
     * Constructor.
     *
     * @param string $type
     * @param string $color
     * @param string $licencePlate
     */
    public function __construct(
        private string $type
    ) {
    }

    public static function initTypes() {
        self::$passengerType = new Car(self::CAR_TYPE_PASSENGER);
        self::$suvType = new Car(self::CAR_TYPE_SUV);
        self::$cargoType = new Car(self::CAR_TYPE_CARGO);
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

    public function cloneCar($color, $licencePlate): CarPrototypeInterface
    {
        $clone = clone $this;
        $clone->setColor($color);
        $clone->setLicencePlate($licencePlate);
        return $clone;
    }

    public static function getPassenger($color, $licencePlate): CarInterface
    {
        return self::$passengerType->cloneCar($color, $licencePlate);
    }

    public static function getSuv($color, $licencePlate): CarInterface
    {
        return self::$suvType->cloneCar($color, $licencePlate);
    }

    public static function getCargo($color, $licencePlate): CarInterface
    {
        return self::$cargoType->cloneCar($color, $licencePlate);
    }
}
