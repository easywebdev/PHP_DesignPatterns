<?php


namespace App\Behavioral\Strategy;


class Hash1 implements IHash
{
    /**
     * @param string $val
     * @return string
     */
    public function getHash(string $val) : string
    {
        return md5($val);
    }
}