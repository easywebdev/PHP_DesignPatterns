<?php


namespace App\Behavioral\Chain;


class Galon extends Container
{
    /**
     * @var string
     */
    public string $name = 'Galon';

    /**
     * @var float
     */
    protected float $volume;

    public function __construct(float $volume)
    {
        $this->volume = $volume;
    }
}