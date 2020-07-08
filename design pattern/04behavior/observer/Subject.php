<?php


class Subject implements \SplSubject
{
    private $flux = ['apple', 'banana', 'cherry'];
    private $index = 0;
private $observers = [];

    public function attach(\SplObserver $observer)
    {
            $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false){
            array_splice($this->observers, $index, 1);
        }
    }

    public function next()
    {

        $this->notify();
        $this->index++;
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    public function __toString()
    
    {
        return $this->flux[$this->index];
    }
}