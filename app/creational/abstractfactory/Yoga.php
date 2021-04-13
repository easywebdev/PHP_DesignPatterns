<?php


namespace App\Creational\Abstractfactory;


class Yoga implements ISport
{
    /**
     * @return string
     */
    public function getSportName(): string
    {
        return 'Yoga';
    }
}