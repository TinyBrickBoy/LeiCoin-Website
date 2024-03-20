<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

$postData = json_decode(file_get_contents('php://input'), true);

$decoded_private_key = base64_decode($postData["privateKey"]);

// Sign the transaction with the private key
openssl_sign("abc" , $signature, $decoded_private_key, OPENSSL_ALGO_SHA256);


http_response_code(200);
echo json_encode(array(
    "message" => $signature
));

?>
