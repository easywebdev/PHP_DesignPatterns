<?php


namespace App\Behavioral\State;


class Lower implements IDecorator
{
    public function writeText(string $text): string
    {
        return strtolower($text);
    }
}