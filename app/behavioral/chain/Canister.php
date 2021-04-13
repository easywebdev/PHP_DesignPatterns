<?php


namespace App\Behavioral\Chain;


class Canister extends  Container
{
    /**
     * @var string
     */
    public string $name = 'Canister';

    /**
     * @var float
     */
    protected float $volume;

    public function __construct(float $volume)
    {
        $this->volume = $volume;
    }
}