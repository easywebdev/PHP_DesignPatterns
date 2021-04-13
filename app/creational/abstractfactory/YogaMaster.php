<?php


namespace App\Creational\Abstractfactory;


class YogaMaster implements IMaster
{
    /**
     * @return string
     */
    public function getMaster(): string
    {
        return 'I am Yoga master';
    }
}