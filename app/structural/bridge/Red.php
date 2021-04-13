<?php


namespace App\Structural\Bridge;


class Red implements IColor
{
    /**
     * @return string
     */
    public function getColor()
    {
        return 'red';
    }
}