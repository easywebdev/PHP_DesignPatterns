<?php


namespace App\Behavioral\Strategy;


class HashCreator
{
    /**
     * @var IHash
     */
    private IHash $hash;

    public function __construct(IHash $hash)
    {
        $this->hash = $hash;
    }

    /**
     * @param string $val
     * @return string
     */
    public function getHash(string $val) : string
    {
        return $this->hash->getHash($val);
    }
}