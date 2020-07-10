<?php

session_start();

//génére des objets de façon aléatoire
// le mettre ene base 64 permet de ne pas avoir de caractères qui viennent intéragir 

$errors = [];
// si le formulaire st envoyé on test si il y a un token
if('POST'===$_SERVER['REQUEST_METHOD']){
    $sentToken =$_POST['token'];

// si pas de données en session

if(!isset($_SESSIOn['csrf_token'])){
    $errors[] ='session perdue';
}
// si il y a une erreur 
    if(isset($_SESSION['csrf_token']) && $sentToken!== $_SESSION['csrf_token']){
$errors[] =  'jeton de synchronisation invalide';
    }
    // si il n' y a pas d'erreur
    if(empty($errors)){
        //enregistrement du commentaire en base de données
        // redirection vers une autre page
        header('Location: /');
        die;
    }
}
$token = base64_encode(random_bytes(32));
$_SESSION['csrf_token'] = $token;
ob_start();
include __DIR__.'/form.tpl.php';

$document = ob_get_clean();

echo $document;

