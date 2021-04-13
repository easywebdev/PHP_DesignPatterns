<?php


namespace App\Behavioral\Templatemethod;


class UG2 extends UserGenerator
{
    /**
     * @var string
     */
    private string $userName;

    /**
     * @var string
     */
    private string $userPass;

    /**
     *
     */
    public function createName() : void
    {
        $this->userName = 'user_' . rand(100, 999);
    }

    /**
     *
     */
    public function createPass() : void
    {
        $pattern = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $this->userPass = substr(str_shuffle($pattern), 0, 8);
    }

    /**
     *
     */
    public function printUser() : void
    {
        $res = [
            'User name' => $this->userName,
            'User pass' => $this->userPass,
        ];

        echo json_encode($res);
    }
}