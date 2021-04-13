<?php


namespace App\Behavioral\Mediator;


// Mediator
class Chart implements IChart
{
    /**
     * @param User $user
     * @param string $message
     * @return string
     */
    public function showMessage(User $user, string $message)
    {
        $msg = '<span style="color: red">' . $user->getName() . '</span>: ' .
                    $message . ' [' . date('Y.m.d H:m:s') . ']';

        return $msg;
    }
}