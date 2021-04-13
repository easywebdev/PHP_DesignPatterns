<?php


namespace App\Structural\Bridge;


class Blue implements IColor
{
    /**
     * @return string
     */
    public function getColor()
    {
        return 'blue';
    }
}