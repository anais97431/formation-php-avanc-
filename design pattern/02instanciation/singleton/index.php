<?php
include __DIR__.'/Singleton.php';

//$s = new Singleton();
$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

echo $s1 == $s2;

