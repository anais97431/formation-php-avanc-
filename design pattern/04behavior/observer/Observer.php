<?php



class Observer implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo $subject."\n";
    }
}