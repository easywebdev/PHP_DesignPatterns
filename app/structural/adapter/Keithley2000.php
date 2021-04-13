<?php


namespace App\Structural\Adapter;


class Keithley2000 implements IVoltmeter
{
    /**
     * @return string
     */
    public function getVoltage()
    {
        return 'V = 10 [V]';
    }
}