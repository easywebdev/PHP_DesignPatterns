<?php


namespace App\Creational\Abstractfactory;


class Karate implements ISport
{
    /**
     * @return string
     */
    public function getSportName(): string
    {
        return 'Karate';
    }
}