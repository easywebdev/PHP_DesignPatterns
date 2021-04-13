<?php


namespace App\Creational\Abstractfactory;


class YogaFactory implements ISportFactory
{
    /**
     * @return ISport
     */
    public function makeSport(): ISport
    {
        return new Yoga();
    }

    /**
     * @return IMaster
     */
    public function makeMaster(): IMaster
    {
        return new YogaMaster();
    }
}