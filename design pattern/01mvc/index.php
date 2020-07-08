<?php

include __DIR__.'/vendor/autoload.php';
// réception requête

//traitement (modèle)
// pendant le traitement pas d'écriture de la réponse
// comme echo, var_dump, print_r, header(), http_response_code(),...
$helloer = new app\model\Helloer();
$result = $helloer->sayHello();

// envoi réponse
// il ne reste plus que du traitement de mise en forme
$formater = new app\view\HtmlFormater();
$response = $formater->format($result);
echo $response;