<?php


namespace App\Structural\Adapter;


class AmpermeterAdapter implements IVoltmeter
{
    /**
     * @var Ampermeter
     */
    protected Ampermeter $ampermeter;

    public function __construct(Ampermeter $ampermeter)
    {
        $this->ampermeter = $ampermeter;
    }

    /**
     * @return string
     */
    public function getVoltage()
    {
        return $this->ampermeter->getCurrent();
    }
}