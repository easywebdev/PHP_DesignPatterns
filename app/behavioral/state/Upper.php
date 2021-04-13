<?php


namespace App\Behavioral\State;


class Upper implements IDecorator
{
    /**
     * @param string $text
     * @return string
     */
    public function writeText(string $text): string
    {
        return strtoupper($text);
    }
}