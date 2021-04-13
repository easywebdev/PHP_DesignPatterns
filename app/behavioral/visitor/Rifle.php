<?php


namespace App\Behavioral\Visitor;


class Rifle implements IWeapon
{
    /**
     * @param IWeaponProperty $veaponProperty
     * @return string
     */
    public function accept(IWeaponProperty $veaponProperty): string
    {
        return $veaponProperty->visitRifle($this);
    }

    /**
     * @return string
     */
    public function getCaliber() : string
    {
        return '5.45';
    }
}