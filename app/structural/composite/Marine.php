<?php


namespace App\Structural\Composite;


class Marine implements IUnit
{
    /**
     * @var
     */
    private $free = true;

    /**
     * @var string[]
     */
    private $actions = ['walk', 'fight'];

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

    public function canHandleAction(string $action) : bool
    {
        if(in_array($action, $this->actions)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function takeAction(string $action) : bool
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