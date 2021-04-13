<?php


namespace App\Creational\Fabricmethod;


abstract class Unit
{
    /**
     * @return IUnit
     *
     * This is a Fabric method. Every child Class must have implementation for this method. In this child Class
     * we can choice concrete realization: Worker or Fighter or may be add another realizations in future.
     */
    abstract public function makeUnit() : IUnit;

    /**
     *
     */
    public function myAction()
    {
        $unit = $this->makeUnit();
        $unit->myAction();
    }
}