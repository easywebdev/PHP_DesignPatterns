<?php


namespace App\Structural\Adapter;


class Keithley2182 implements IVoltmeter
{
    /**
     * @return string
     */
    public function getVoltage()
    {
        return 'V = 11.5 [V]';
    }
}