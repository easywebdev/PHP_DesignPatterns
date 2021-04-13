<?php


namespace App\Creational\Abstractfactory;


interface ISportFactory
{
    public function makeSport() : ISport;

    public function makeMaster() : IMaster;
}