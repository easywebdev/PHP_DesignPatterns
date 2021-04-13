<?php


namespace App\Behavioral\Memento;


class Random
{
    /**
     * @var int
     */
    private int $value;

    /**
     *
     */
    public function setValue() : void
    {
        $this->value = rand(1, 100);
    }

    /**
     * @return int
     */
    public function getValue() : int
    {
        return $this->value;
    }

    /**
     * @return RandomMemento
     */
    public function saveValue() : RandomMemento
    {
        return new RandomMemento($this->value);
    }

    /**
     * @param RandomMemento $randomMemento
     * @return int
     */
    public function restoreValue(RandomMemento $randomMemento) : int
    {
        return $this->value = $randomMemento->getValue();
    }
}