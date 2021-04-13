<?php


namespace App\Behavioral\Memento;


class RandomMemento
{
    /**
     * @var int
     */
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }
}