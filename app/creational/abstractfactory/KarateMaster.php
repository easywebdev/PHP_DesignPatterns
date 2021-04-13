<?php


namespace App\Creational\Abstractfactory;


class KarateMaster implements IMaster
{
    /**
     * @return string
     */
    public function getMaster(): string
    {
        return 'I am Karate master';
    }
}