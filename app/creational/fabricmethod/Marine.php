<?php


namespace App\Creational\Fabricmethod;


class Marine extends Unit
{
    public function makeUnit(): IUnit
    {
        return new Fighter();
    }
}