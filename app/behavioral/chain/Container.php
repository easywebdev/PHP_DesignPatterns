<?php


namespace App\Behavioral\Chain;


class Container
{
    /**
     * @var float
     */
    protected float $volume;

    /**
     * @var Container
     */
    protected $adjustContainer;

    /**
     * @param float $value
     * @return bool
     */
    public function checkVolume(float $value) : bool
    {
        return $value <= $this->volume;
    }

    /**
     * @param Container $container
     */
    public function nextContainer(Container $container) : void
    {
        $this->adjustContainer = $container;
    }

    // This is Chain of Responsibility method. It use self and next objects. Next object se as self in the next step
    // We use recursive call this method
    /**
     * @param float $value
     */
    public function fill(float $value)
    {
        if($this->checkVolume($value)) {
            echo 'Volume: ' . $value . ' [L]; Use: ' . $this->name;
        } elseif ($this->adjustContainer) {
            echo 'Cannot use ' . $this->name . ' for ' . $value . ' [L]</br>';
            $this->adjustContainer->fill($value);
        } else {
            echo 'Cannot use ' . $this->name . ' for ' . $value . ' [L]</br>' . 'We have not adjust container';
        }
    }
}