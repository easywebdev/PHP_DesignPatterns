<?php


namespace App\Structural\Bridge;


class Triangle implements IShape
{
    protected IColor $color;

    public function __construct(IColor $color)
    {
        $this->color = $color;
    }

    public function getShape()
    {
        return '<span style="color: ' . $this->color->getColor() . '">Triangle</span>';
    }
}