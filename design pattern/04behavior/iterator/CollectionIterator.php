<?php



class CollectionIterator implements \Iterator
{
    private $collection;

    private $currentIndex;

    public function __construct(Collection $collection)
    {
            $this->collection = $collection;
            $this->currentIndex = 0;
    }

    public function current()
    {
        return $this->collection->get($this->currentIndex);
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function key()
    {
        return $this->currentIndex;
    }

    public function valid()
    {
       $isGreater = $this->currentIndex >= $this->collection->length();
       $isLower = $this->currentIndex < 0;
       return !$isGreater && !$isLower;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }
}