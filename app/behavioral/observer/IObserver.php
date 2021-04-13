<?php


namespace App\Behavioral\Observer;


interface IObserver
{
    public function onQuestionPosted(QuestionPost $questionPost) : void;
}