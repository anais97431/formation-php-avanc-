<?php

include __DIR__.'/FormInterface.php';

class Form implements FormInterface
{
 private $fields =[];
 private $lock = false;

    public function addField(string $name, string $type)
    {
        if ($this->lock){
            throw new \Exception('Le formulaire est vérouillé');
        }
        $this->fields[] = [$name, $type];
    }
    public function lock()
    {
        $this->lock = true;
    }

    public function getFields(): array
    {
        return $this->fields;
    }
}
