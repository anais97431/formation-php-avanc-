<?php


class Collection
{
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }


    public function get(int $i)
    {
        return $this->data[$i];
    }

    public function length()
    {
        return count($this->data);
    }
}