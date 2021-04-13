<?php

namespace App\Behavioral\Mediator;

interface IChart
{
    public function showMessage(User $user, string $message);
}