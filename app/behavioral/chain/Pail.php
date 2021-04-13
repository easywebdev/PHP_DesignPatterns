<?php


namespace App\Behavioral\Chain;


class Pail extends Container
{
    /**
     * @var string
     */
    public string $name = 'Pail';

    /**
     * @var float
     */
    protected float $volume;

    public function __construct(float $volume)
    {
        $this->volume = $volume;
    }
}