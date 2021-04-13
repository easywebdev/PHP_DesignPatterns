<?php


namespace App\Behavioral\Command;


class ReceiveMail implements ICommand
{
    private Mail $mail;

    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function execute() : string
    {
        return $this->mail->receiveMail();
    }
}