<?php


namespace App\Behavioral\Strategy;


class Hash2 implements IHash
{
    /**
     * @param string $val
     * @return string
     */
    public function getHash(string $val) : string
    {
        return password_hash($val, PASSWORD_DEFAULT);
    }
}