<?php

include __DIR__.'/ProductABBridge.php';

$a = new ProductA();
$a->title = 'Chocapic';

$b =(new ProductABBridge())->createB($a);

var_dump($b);