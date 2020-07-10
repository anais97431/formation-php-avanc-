<?php

// Routing verb + URL HTTP détermine traitement à effectuer

// GET/desk => méthode de classe
// GET/desk/12 => méthode de classe
// exemple de REGEX un code postal[0-9]{5}
// 3 lettres majuscules suivies d'au moins un chiffre[A-Z]{3}[0-9]{1,}


// effectuer le dit traitement



// envoyer le résultat au client (réponse HTTP)

use app\MethodNotAllowedException;
use app\NotFoundException;

require __DIR__.'/vendor/autoload.php';

$router = new app\Router();

try{
    $result = $router->route();
    $response = new app\Response($result);
}
catch(NotFoundException $e){
    $response = new app\Response(['error' => 'not found'], 404);
}
catch(MethodNotAllowedException $e){
    $response = new app\Response(['error' => 'method not allowed'], 405);
}

$response->send();