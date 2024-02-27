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

//$encoded_senderAddress = str_replace("-----BEGIN PUBLIC KEY-----\n", '', $senderAddress);
//$encoded_senderAddress = str_replace("\n-----END PUBLIC KEY-----\n", '', $encoded_senderAddress);

//$encoded_private_key = str_replace("-----BEGIN PRIVATE KEY-----\n", '', $privateKeyPEM);
//$encoded_private_key = str_replace("\n-----END PRIVATE KEY-----\n", '', $encoded_private_key);

$encoded_public_key = base64_encode($publicKeyPEM);
$encoded_senderAddress = "lc1-" . hash("sha256", $publicKeyPEM);

$encoded_private_key = base64_encode($privateKeyPEM);

echo json_encode(array(
    "address" => $encoded_senderAddress,
    "public_key" => $encoded_public_key,
    "private_key" => $encoded_private_key,
));

?>