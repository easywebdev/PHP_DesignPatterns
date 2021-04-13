<?php


namespace App\Behavioral\Visitor;


class MachineGun implements IWeapon
{
    /**
     * @param IWeaponProperty $veaponProperty
     * @return string
     */
    public function accept(IWeaponProperty $veaponProperty): string
    {
        return $veaponProperty->visitMachineGun($this);
    }

    /**
     * @return string
     */
    public function getCaliber() : string
    {
        return '7.62';
    }
}