<?php

namespace App\Factories\Prototype;

class CarDealer
{
    private const CAR_TYPES = [
        'passenger',
        'SUV',
        'cargo'
    ];

    private $passengerType;
    private $suvType;
    private $cargoType;

    public function __construct(
    ) {
        $this->passengerType = new Car(self::CAR_TYPES[0]);
        $this->suvType = new Car(self::CAR_TYPES[1]);
        $this->cargoType = new Car(self::CAR_TYPES[2]);
    }

    public function createPassenger($color, $licencePlate)
    {
        return $this->setVehicleData(clone $this->passengerType, $color, $licencePlate);
    }

    public function createSuv($color, $licencePlate)
    {
        return $this->setVehicleData(clone $this->suvType, $color, $licencePlate);
    }

    public function createCargo($color, $licencePlate)
    {
        return $this->setVehicleData(clone $this->cargoType, $color, $licencePlate);
    }

    private function setVehicleData(Car $vehicle, $color, $licencePlate)
    {
        return $vehicle->setColor($color)->setLicencePlate($licencePlate);
    }
}
