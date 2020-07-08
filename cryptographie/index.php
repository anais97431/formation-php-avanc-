<?php

//hachage

// ++ contrôle intégrité
//++ vitesse d'exécution
// complexité trop faible pour gérer la sécurité
echo md5('un texte')."\n";
$sha1Hashed = sha1('un texte');
echo $sha1Hashed."\n";

$user1 =[
    'username' => 'anais',
    'password' => 'secret',
    'salt' => 'random'
];

$user2 =[
    'username' => 'nicolas',
    'password' => 'secret',
    'salt' => 'modnar'
];

// sur algorithme historique ajout d'un "sel" 
// = chaîne de caractère aléatoire stockée à proximité du mot de passe
echo hash('sha512',$user1['password'].$user1['salt'])."\n";
echo hash('sha512',$user2['password'].$user2['salt'])."\n";
// moins "utile", possibilité de rajouter un "poivre"
//= chaîne de caractères aléatoire globale à l'application


// hachage actuel de mot de passe en PHP
// algo actuel, "auto-salé"
$passwordBcrypted1 = password_hash('secret', PASSWORD_DEFAULT);
$passwordBcrypted2 = password_hash('secret', PASSWORD_DEFAULT);
$passwordBcrypted3 = password_hash('secret', PASSWORD_BCRYPT, ['cost'=>12]);


echo $passwordBcrypted1."\n";
echo $passwordBcrypted2."\n";
echo $passwordBcrypted3."\n";

echo password_verify('secret',$passwordBcrypted1)."\n";
echo password_verify('secret',$passwordBcrypted2)."\n";
echo password_verify('secret',$passwordBcrypted3)."\n";
// les encodages se limitent à retranscrire le même contenu
// dans un autre jeux de caractère
$base64Encoded = base64_encode('un texte');
echo $base64Encoded."\n";
echo base64_decode($base64Encoded)."\n";
echo base64_encode(hex2bin($sha1Hashed))."\n";