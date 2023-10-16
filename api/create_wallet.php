<?php

header('Content-Type: application/json; charset=utf-8');

// Generate a public-private key pair
$privateKey = openssl_pkey_new(array(
    'private_key_bits' => 2048,
    'private_key_type' => OPENSSL_KEYTYPE_RSA,
));

openssl_pkey_export($privateKey, $privateKeyPEM);
$details = openssl_pkey_get_details($privateKey);
$publicKeyPEM = $details['key'];

$senderAddress = $publicKeyPEM;

echo json_encode(array(
    "address" => base64_encode($senderAddress),
    "private_key_pem" => base64_encode($privateKeyPEM)
));

?>