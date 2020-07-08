<?php

include __DIR__ .'/Collection.php';
include __DIR__ .'/CollectionIterator.php';


$fruits = new Collection(['apple', 'banana', 'cherry']);

$fruitIterator = new CollectionIterator($fruits);


foreach($fruitIterator as $fruit){
    echo $fruit."\n";
}

$fruitIterator->rewind();

while($fruitIterator->valid()){
    echo $fruitIterator->current()."\n";
    $fruitIterator->next();
}