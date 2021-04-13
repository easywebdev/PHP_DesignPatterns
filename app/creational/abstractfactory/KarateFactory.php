<?php


namespace App\Creational\Abstractfactory;


class KarateFactory implements ISportFactory
{
    /**
     * @return ISport
     */
    public function makeSport(): ISport
    {
        return new Karate();
    }

    /**
     * @return IMaster
     */
    public function makeMaster(): IMaster
    {
        return new KarateMaster();
    }
}