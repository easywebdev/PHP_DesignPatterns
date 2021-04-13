<?php


namespace App\Structural\Composite;


interface IUnit
{
    public function canHandleAction(string $action) : bool;

    public function takeAction( string $action) : bool;
}