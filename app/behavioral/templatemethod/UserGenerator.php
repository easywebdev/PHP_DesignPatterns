<?php


namespace App\Behavioral\Templatemethod;


abstract class UserGenerator
{
    abstract public function createName();

    abstract public function createPass();

    abstract public function printUser();

    public function createUser()
    {
        $this->createName();
        $this->createPass();
        $this->printUser();
    }
}