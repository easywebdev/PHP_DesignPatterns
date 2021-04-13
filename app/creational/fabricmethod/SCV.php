<?php


namespace App\Creational\Fabricmethod;


class SCV extends Unit
{
    /**
     * @return IUnit
     */
    public function makeUnit(): IUnit
    {
        return new Worker();
    }
}