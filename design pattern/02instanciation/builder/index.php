<?php

include __DIR__.'/FormBuilder.php';

$builder = new FormBuilder();
$builder->addField('username', 'text');
$builder->addField('password', 'password');
$form = $builder->getForm();

var_dump($form->getFields());