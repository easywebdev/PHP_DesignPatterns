<?php

namespace App\Behavioral\Visitor;


// Visited
interface IWeapon
{
    public function accept(IWeaponProperty $veaponProperty) : string;
}