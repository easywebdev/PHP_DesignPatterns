<?php


namespace App\Structural\Flyweight;


// This is our Flyweight. It sharing their resources to many similar objects
class Bank
{
    private float $summ;

    public function __construct(float $summ)
    {
        $this->summ = $summ;
    }

    /**
     * @return string
     */
    public function getCredit() : string
    {
        $percent = rand(1, 10);

        return "$this->summ $percent [%]";
    }
}