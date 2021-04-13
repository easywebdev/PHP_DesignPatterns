<?php


namespace App\Creational\Builder;


class PolynomBuilder
{
    public float $x;

    public float $A0 = 0;
    public float $A1 = 0;
    public float $A2 = 0;
    public float $A3 = 0;
    public float $A4 = 0;
    public float $A5 = 0;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    /**
     * @param float $A0
     * @return $this
     */
    public function setA0(float $A0)
    {
        $this->A0 = $A0;
        return $this;
    }

    /**
     * @param float $A1
     * @return $this
     */
    public function setA1(float $A1)
    {
        $this->A1 = $A1;
        return $this;
    }

    /**
     * @param float $A2
     * @return $this
     */
    public function setA2(float $A2)
    {
        $this->A2 = $A2;
        return $this;
    }

    /**
     * @param float $A3
     * @return $this
     */
    public function setA3(float $A3)
    {
        $this->A3 = $A3;
        return $this;
    }

    /**
     * @param float $A4
     * @return $this
     */
    public function setA4(float $A4)
    {
        $this->A4 = $A4;
        return $this;
    }

    /**
     * @param float $A5
     * @return $this
     */
    public function setA5(float $A5)
    {
        $this->A5 = $A5;
        return $this;
    }

    /**
     * @return Polynom
     */
    public function build() : Polynom
    {
        return new Polynom($this);
    }
}