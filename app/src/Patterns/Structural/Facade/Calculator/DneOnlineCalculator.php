<?php

namespace App\Patterns\Structural\Facade\Calculator;


use App\Service\Container\SoapContainer;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\SoapServices\SoapClient\Client;
use GoetasWebservices\SoapServices\SoapClient\ClientFactory;

class DneOnlineCalculator implements CalculatorInterface
{
    protected static ?Client $client = null;

    public function getAvailableOperations(): array
    {
        return [
            "add",
            "subtract",
            "divide",
            "multiply",
        ];
    }

    public function doOperation(string $operation, int $a, int $b)
    {
        switch ($operation) {
            case "add":
                return (int)$this->getClient()->add($a, $b)->getAddResult();
            case "subtract":
                return (int)$this->getClient()->subtract($a, $b)->getSubtractResult();
            case "divide":
                return (int)$this->getClient()->divide($a, $b)->getDivideResult();
            case "multiply":
                return (int)$this->getClient()->multiply($a, $b)->getMultiplyResult();
        }
        throw new \Exception("Invalid operation");
    }

    private function getClient() {
        if (!empty(self::$client)) {
            return self::$client;
        }

        $container = new SoapContainer();
        /** @var \GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder $serializer */
        $serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();
        $metadata = $container->get('goetas_webservices.soap.metadata_reader');

        $factory = new ClientFactory($metadata, $serializer);

        /**
         * @var $client Client
         */
        self::$client = $factory->getClient(
            'http://www.dneonline.com/calculator.asmx?WSDL',
            "CalculatorSoap",
            "Calculator"
        );

        return self::$client;
    }

}
