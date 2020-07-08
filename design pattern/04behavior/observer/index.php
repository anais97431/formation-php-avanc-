<?php

include __DIR__ .'/Observer.php';
include __DIR__ .'/Subject.php';

$observer1 = new Observer();
$observer2 = new Observer();
$subject = new Subject();

$subject->next();
$subject->attach($observer1);

$subject->next();
$subject->attach($observer2);
$subject->next();