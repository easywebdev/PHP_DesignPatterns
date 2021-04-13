<?php


namespace App\Creational\Simplefactory;


interface IPass
{
    public function createHash(string $pass);
    public function checkPass(string $pass, string $hash);
}