<?php


namespace App\Behavioral\Command;


class MailClient
{
    public function process(ICommand $command) : string
    {
        return $command->execute();
    }
}