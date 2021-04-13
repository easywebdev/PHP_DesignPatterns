<?php


namespace App\Behavioral\Visitor;


class Caliber implements IWeaponProperty
{
    /**
     * @param Gun $gun
     * @return string
     */
    public function visitGun(Gun $gun) : string
    {
        return $gun->getCaliber();
    }

    /**
     * @param Rifle $rifle
     * @return string
     */
    public function visitRifle(Rifle $rifle) : string
    {
        return $rifle->getCaliber();
    }

    /**
     * @param MachineGun $machineGun
     * @return string
     */
    public function visitMachineGun(MachineGun $machineGun) : string
    {
        return $machineGun->getCaliber();
    }
}