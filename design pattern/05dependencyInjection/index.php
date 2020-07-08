<?php

use app\ServiceContainer;

require __DIR__.'/vendor/autoload.php';

$container = new ServiceContainer();


// AFFICHAGE REPONSE NEWSLETTER


$newsletter = $container->get('newsletter');
$newsletter->setRecipients(['Anaïs', 'Nicolas', 'Pierre']);

$newsletter->send('formations php', 'blablabla');
$newsletter->send('formations JS', 'blablabla');