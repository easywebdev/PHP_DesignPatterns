<?php


namespace App\Behavioral\State;


class TextCreator
{
    /**
     * @var IDecorator
     */
    private IDecorator $decorator;

    public function __construct(IDecorator $decorator)
    {
        $this->decorator = $decorator;
    }

    // This method use for change state
    /**
     * @param IDecorator $decorator
     */
    public function setDecorator(IDecorator $decorator) : void
    {
        $this->decorator = $decorator;
    }

    /**
     * @param string $text
     * @return string
     */
    public function writeText(string $text) : string
    {
        return $this->decorator->writeText($text);
    }
}