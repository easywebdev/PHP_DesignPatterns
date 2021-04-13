<?php


namespace App\Structural\Composite;


class Team implements IUnit
{
    /**
     * @var IUnit[]
     */
    private $units;

    /**
     * @var array
     */
    private $canUnits = [];

    public string $name;

    /**
     * @var string
     */
    public string $action;

    public function __construct(array $units)
    {
        $this->units = $units;
    }

    /**
     * @param IUnit $unit
     */
    public function addUnit(IUnit $unit) : void
    {
        $this->units[] = $unit;
    }

    /**
     * @param IUnit $unit
     */
    public function removeUnit(IUnit $unit) : void
    {
        $this->units = array_diff($this->units, [$unit]);
        $this->units = array_values($this->units);
    }

    /**
     * @param string $action
     * @return bool
     */
    public function canHandleAction(string $action) : bool
    {
        // Clear array $canUnits
        $this->canUnits = [];

        // Set array $canUnits
        foreach ($this->units as $unit) {
            if($unit->canHandleAction($action)) { // If array $units contain $unit with $action - add it into $canUnits
                $this->canUnits[] = $unit;
            }
        }

        // Check if uor team of $units can to do $action
        if(count($this->canUnits) > 0) {
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
    public function takeAction(string $action) : bool
    {
        // Check array $canUnits
        if(count($this->canUnits) > 0) {
            foreach ($this->canUnits as $unit) {
                if($unit->takeAction($action)) {
                    $this->name = $unit->name;
                    $this->action = $action;
                    return true;
                }
            }
        }

        return false;
    }
}