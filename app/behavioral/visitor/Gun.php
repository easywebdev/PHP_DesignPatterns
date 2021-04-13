<?php


namespace App\Behavioral\Visitor;


class Gun implements IWeapon
{
    /**
     * @param IWeaponProperty $veaponProperty
     * @return string
     */
    public function accept(IWeaponProperty $veaponProperty) : string
    {
        return $veaponProperty->visitGun($this);
    }

    /**
     * @return string
     */
    public function getCaliber() : string
    {
        return '.12';
    }
}