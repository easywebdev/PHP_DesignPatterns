<?php


namespace App\Behavioral\Observer;


class SupportWorker implements IObserver
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param QuestionPost $questionPost
     * @return string
     */
    public function onQuestionPosted(QuestionPost $questionPost) : void
    {
        echo '<div><b>Support person: </b>' . $this->name . '; <b>Question: </b>' . $questionPost->getQuestion() . '</div>';
    }
}