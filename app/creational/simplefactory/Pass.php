<?php


namespace App\Creational\Simplefactory;


class Pass implements IPass
{
    /**
     * @param string $pass
     * @return false|string|null
     */
    public function createHash(string $pass)
    {
        return password_hash($pass, PASSWORD_DEFAULT);
    }

    /**
     * @param string $pass
     * @param string $hash
     * @return bool
     */
    public function checkPass(string $pass, string $hash)
    {
        if(password_verify($pass, $hash)) {
            return 'Password is right';
        }
        else {
            return 'Password is wrong';
        }
    }
}