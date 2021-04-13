<?php


namespace App\Behavioral\Observer;


class QuestionPost
{
    /**
     * @var string
     */
    private string $question;

    public function __construct(string $question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getQuestion() : string
    {
        return $this->question;
    }
}