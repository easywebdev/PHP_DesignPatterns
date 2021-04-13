<?php


namespace App\Behavioral\Command;


class Mail
{
    /**
     * @return string
     */
    public function receiveMail() : string
    {
        return 'Mail from HOST received';
    }

    /**
     * @return string
     */
    public function sendMail() : string
    {
        return 'Mail to HOST sent';
    }
}