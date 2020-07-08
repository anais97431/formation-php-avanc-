<?php


include __DIR__.'/FormInterface.php';

class FormBuilder{

    private $form;

    public function __construct()
    {
        $this->form = new Form();
    }

    public function addField(string $name, string $type)
    {
        $this ->form->addField($name, $type);
    }

    public function getForm(): FormInterface
    {
        $this->form->lock();
        return $this->form;
    }
}