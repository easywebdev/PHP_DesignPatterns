<?php


namespace App\Structural\Flyweight;


class CreditMaker
{
    /**
     * @var array
     */
    private $availableBank = [];

    // This method realise sharing resource. New resource will be created only if it not exist.
    // In other cases will be use existing resource.
    /**
     * @param string $creditType
     * @return Bank|mixed
     */
    public function makeCredit(string $creditType, float $summ)
    {
        if(empty($this->availableBank[$creditType]))
        {
            $this->availableBank[$creditType] = new Bank($summ);
        }

        return $this->availableBank[$creditType];
    }
}