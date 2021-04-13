<?php


namespace App\Behavioral\Visitor;


// Use add properties. It is add function and don't need modification object
class Weight implements IWeaponProperty
{
    /**
     * @param Gun $gun
     * @return string
     */
    public function visitGun(Gun $gun): string
    {
        return '0.6 [kg]';
    }

    /**
     * @param Rifle $rifle
     * @return string
     */
    public function visitRifle(Rifle $rifle): string
    {
        return '1.3 [kg]';
    }

    /**
     * @param MachineGun $machineGun
     * @return string
     */
    public function visitMachineGun(MachineGun $machineGun): string
    {
        return '7 [kg]';
    }
}