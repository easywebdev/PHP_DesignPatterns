<?php


namespace App\Creational\Simplefactory;


class PassFactory
{
    public static function makePass() : IPass
    {
        return  new Pass();
    }
}