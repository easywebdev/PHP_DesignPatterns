<?php


namespace App\Structural\Facade;


class WireCalculatorFacade
{
    private WireCalculator $wireCalculator;

    public function __construct(WireCalculator $wireCalculator)
    {
        $this->wireCalculator = $wireCalculator;
    }

    /**
     * @return string
     */
    public function getWire() : string
    {
        if($this->wireCalculator->validateData()) {
            $this->wireCalculator->calculateSquare();
            $this->wireCalculator->calculateVolume();
            $this->wireCalculator->calculateSurface();
            $this->wireCalculator->calculateResistance();
        }

        return $this->wireCalculator->formatResult();
    }
}