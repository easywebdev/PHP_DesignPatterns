<?php


namespace App\Structural\Decorator;


class OhmMeter implements IOhmmeter
{
    /**
     * @return string
     */
    public function getOhm()
    {
        return 'R = 12.5 [Ohm]';
    }
}