<?php


namespace App\Behavioral\State;


interface IDecorator
{
    public function writeText(string $text) : string;
}