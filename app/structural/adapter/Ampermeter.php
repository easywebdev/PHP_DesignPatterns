<?php


namespace App\Structural\Adapter;


class Ampermeter
{
    /**
     * @return string
     */
    public function getCurrent()
    {
        return 'I = 1.3 [A]';
    }
}