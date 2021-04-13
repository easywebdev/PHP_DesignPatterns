<?php


namespace App\Structural\Bridge;


class Rectangle implements IShape
{
    protected IColor $color;

    public function __construct(IColor $color)
    {
        $this->color = $color;
    }

    public function getShape()
    {
        return '<span style="color: ' . $this->color->getColor() . '">Rectangle</span>';
    }
}