<?php


namespace App\Creational\Prototype;


class User
{
    /**
     * @var int
     */
    protected int $number;

    /**
     * @var string
     */
    protected string $name;

    public function __construct(int $number, string $name)
    {
        $this->number = $number;
        $this->name = $name;
    }

    public function __clone()
    {
        if(isset($this->number)) {
            $this->number++;
        }
        else {
            $this->number = 1;
        }
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number) : void
    {
        $this->number = $number;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
}