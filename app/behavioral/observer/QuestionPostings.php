<?php


namespace App\Behavioral\Observer;


class QuestionPostings implements IObservable
{
    /**
     * @var array
     */
    private $observers = [];

    // This method realized notification for observers
    /**
     * @param QuestionPost $questionPost
     */
    public function notify(QuestionPost $questionPost)
    {
        foreach ($this->observers as $observer) {
            $observer->onQuestionPosted($questionPost);
        }
    }

    /**
     * @param IObserver $observer
     */
    public function addObserver(IObserver $observer) : void
    {
        $this->observers[] = $observer;
    }

    /**
     * @param QuestionPost $questionPost
     */
    public function addQuestion(QuestionPost $questionPost) : void
    {
        $this->notify($questionPost);
    }
}