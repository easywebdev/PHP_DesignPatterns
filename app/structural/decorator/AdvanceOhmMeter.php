<?php


namespace App\Structural\Decorator;


class AdvanceOhmMeter implements IOhmmeter
{
    /**
     * @var IOhmmeter
     */
    private IOhmmeter $ohmmeter;

    /**
     * @var string
     */
    private string $err = ' Accuracy 2 %';

    public function __construct(IOhmmeter $ohmmeter)
    {
        $this->ohmmeter = $ohmmeter;
    }

    /**
     * @return string
     */
    public function getOhm()
    {
        return $this->ohmmeter->getOhm() . $this->err;
    }
}