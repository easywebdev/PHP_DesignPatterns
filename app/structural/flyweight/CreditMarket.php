<?php


namespace App\Structural\Flyweight;


class CreditMarket
{
    private $creditOrders = [];

    private CreditMaker $creditMaker;

    public function __construct(CreditMaker $creditMaker)
    {
        $this->creditMaker = $creditMaker;
    }

    /**
     * @param string $person
     * @param string $creditType
     */
    public function takeCredit(string $person, string $creditType, float $summ)
    {
        $this->creditOrders[$person] = $this->creditMaker->makeCredit($creditType, $summ);
    }

    /**
     *
     */
    public function showCredits()
    {
        echo '<div>';

        foreach ($this->creditOrders as $person => $creditType) {
            $creditDetails = $creditType->getCredit();
            echo "<div>$person : $creditDetails</div>";
        }

        echo '</div>';
    }
}