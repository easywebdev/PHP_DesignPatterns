<?php


namespace App\Structural\Bridge;


interface IShape
{
    public function __construct(IColor $color);
    public function getShape();
}