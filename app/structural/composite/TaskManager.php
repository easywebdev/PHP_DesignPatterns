<?php


namespace App\Structural\Composite;


class TaskManager
{
    private $units;

    public function __construct(array $units)
    {
        $this->units = $units;
    }

    /**
     * @param string $action
     * @return bool
     */
    public function performAction(string $action)
    {
        $result = 'No Units for this action';

        foreach ($this->units as $unit) {
            if($unit->canHandleAction($action)) {
                if($unit->takeAction($action)) {
                    $result = 'Unit: ' . $unit->name . '; Action: ' . $unit->action;
                    break;
                }
            }
        }

        return $result;
    }
}