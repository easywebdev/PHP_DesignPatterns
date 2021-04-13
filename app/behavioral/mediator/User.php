<?php


namespace App\Behavioral\Mediator;


class User
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var IChart
     */
    private IChart $chart;

    public function __construct(string $name, IChart $chart)
    {
        $this->name = $name;
        $this->chart = $chart;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function sendMessage(string $message)
    {
        return $this->chart->showMessage($this, $message);
    }
}