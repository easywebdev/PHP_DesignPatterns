<?php


namespace App\Structural\Facade;


class WireCalculator
{
    private const RO = 1.72E-8;

    private string $name;

    private float $radius;

    private float $length;

    private $square;

    private $volume;

    private $surface;

    private $resistance;

    public function __construct(string $name, float $radius, float $length)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->length = $length;
    }

    /**
     * @return bool
     */
    public function validateData() : bool
    {
        if(is_numeric($this->radius) && is_numeric($this->length)) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     *
     */
    public function calculateSquare() : void
    {
        $this->square = pi() * pow($this->radius, 2);
    }

    /**
     *
     */
    public function calculateVolume() : void
    {
        $this->volume = $this->square * $this->length;
    }

    /**
     *
     */
    public function calculateSurface() : void
    {
        $this->surface = 2 * pi() * $this->radius * $this->length;
    }

    /**
     *
     */
    public function calculateResistance() : void
    {
        $this->resistance = self::RO * $this->length / $this->square;
    }

    public function formatResult() : string
    {
        return "<div>
                  <div><b>Wire parameters:</b></div>
                  <div>Name: $this->name</div>
                  <div>Radius: $this->radius [m]</div>
                  <div>Length: $this->length [m]</div>
                  <div>Square: $this->square [m<sup>2</sup>]</div>
                  <div>Volume: $this->volume [m<sup>3</sup>]</div>
                  <div>Surface: $this->surface [m<sup>2</sup>]</div>
                  <div>Resistance: $this->resistance [&omega;]</div> 
                </div>";
    }

}