<?php


namespace App\Creational\Builder;


class Polynom
{
    protected float $x;

    protected float $A0 = 0;
    protected float $A1 = 0;
    protected float $A2 = 0;
    protected float $A3 = 0;
    protected float $A4 = 0;
    protected float $A5 = 0;

    public function __construct(PolynomBuilder $builder)
    {
        $this->x = $builder->x;
        $this->A0 = $builder->A0;
        $this->A1 = $builder->A1;
        $this->A2 = $builder->A2;
        $this->A3 = $builder->A3;
        $this->A4 = $builder->A4;
        $this->A5 = $builder->A5;
    }

    public function result()
    {
        return pow($this->x, 5) * $this->A5 + pow($this->x, 4) * $this->A4 + pow($this->x, 3) * $this->A3
                + pow($this->x, 2) * $this->A2 + $this->x * $this->A1 + $this->A0;
    }
}