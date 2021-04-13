<?php

namespace App\Behavioral\Strategy;


interface IHash
{
    public function getHash(string $val) : string;
}