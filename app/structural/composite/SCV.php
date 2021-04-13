<?php


namespace App\Structural\Composite;


class SCV implements IUnit
{
    /**
     * @var bool
     */
    private $free = true;
    /**
     * @var string[]
     */
    private $actions = ['walk', 'collect'];

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $action;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $action
     * @return bool
     */
    public function canHandleAction( string $action) : bool
    {
        if(in_array($action, $this->actions)) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * @param string $action
     * @return bool
     */
    public function takeAction(string $action) :bool
    {
        if($this->free) {
            $this->free = false;
            $this->action = $action;
            return true;
        }
        else {
            return false;
        }
    }

    /**
     *
     */
    public function abolishAction() : void
    {
        $this->free = true;
    }
}