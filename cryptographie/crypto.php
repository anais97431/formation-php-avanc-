<?php


$message = 'un message très secret';
$message2 = 'un message très secret, mais un peu plus long';
$password = 'mot-de-passe';
$cipher = 'aes-256-cfb';

$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
$cryptedMessage = openssl_encrypt($message2, $cipher, $password, 0, $iv);


echo $cryptedMessage."\n";

$decryptedMessage = openssl_decrypt($cryptedMessage, $cipher, $password, 0, $iv);

echo $decryptedMessage."\n";

$keyPair = openssl_pkey_new();
$details = openssl_pkey_get_details($keyPair);

var_dump($details);

openssl_public_encrypt($message, $cryptedMessage, $details['key']);

echo base64_encode($cryptedMessage)."\n";


openssl_pkey_export($keyPair, $privateKey);
openssl_private_decrypt($cryptedMessage, $decryptedMessage, $privateKey);

echo $decryptedMessage."\n";