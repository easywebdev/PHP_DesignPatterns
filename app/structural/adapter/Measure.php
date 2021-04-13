<?php


namespace App\Structural\Adapter;


class Measure
{
    /**
     * @param IVoltmeter $voltmeter
     * @return mixed
     */
    public function getResult(IVoltmeter $voltmeter)
    {
        return $voltmeter->getVoltage();
    }
}