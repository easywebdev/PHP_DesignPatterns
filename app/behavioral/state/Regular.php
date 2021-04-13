<?php


namespace App\Behavioral\State;


class Regular implements IDecorator
{
    /**
     * @param string $text
     * @return string
     */
    public function writeText(string $text): string
    {
        return $text;
    }
}