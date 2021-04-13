<?php


namespace App\Behavioral\Visitor;


// Visitor
interface IWeaponProperty
{
    public function visitGun(Gun $gun) : string;

    public function visitRifle(Rifle $rifle) : string;

    public function visitMachineGun(MachineGun $machineGun) : string;
}