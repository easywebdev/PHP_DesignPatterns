<?php


namespace App\Behavioral\Observer;


interface IObservable
{
    public function notify(QuestionPost $questionPost);
}