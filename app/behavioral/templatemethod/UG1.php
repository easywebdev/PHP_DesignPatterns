<?php


namespace App\Behavioral\Templatemethod;


class UG1 extends UserGenerator
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
        $names = ['John', 'Bob', 'Jec', 'Rob', 'Mat'];

        $this->userName = $names[array_rand($names, 1)];
    }

    /**
     *
     */
    public function createPass() : void
    {
        $this->userPass = '12345678';
    }

    /**
     *
     */
    public function printUser() : void
    {
        echo "<div>
                    <div><b>User name: </b>$this->userName</div>
                    <div><b>User pass: </b>$this->userPass</div>
                </div>";
    }
}