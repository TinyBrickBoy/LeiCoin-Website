<?php

header('Content-Type: application/json; charset=utf-8');

$postData = json_decode(file_get_contents('php://input'), true);

$requiredPostDataList = array(
    "senderAddress",
    "publicKey",
    "privateKey",
    "recipientAddress",
    "amount"
);

foreach ($requiredPostDataList as $requiredPostDataItem) {
    if (!isset($postData[$requiredPostDataItem]) || empty($postData[$requiredPostDataItem])) {
        echo json_encode(array(
            "cb" => "error",
            "message" => "400 Bad Request. Missing Data."
        ));
        http_response_code(400);
        exit;
    }
}

// Create a transaction
$transactionData = array(
    'senderAddress' => $postData["senderAddress"],
    "publicKey" => $postData["publicKey"],
    "input" => [],
    "output" => [
        array(
            'recipientAddress' => $postData["recipientAddress"],
            'amount' => $postData["amount"],
            'index' => 0
        ),
        array(
            'recipientAddress' => $postData["senderAddress"],
            'amount' => $postData["amount"],
            'index' => 1
        )
    ]
);

foreach ($transactionData["output"] as &$transaction) {
    $transaction['hash'] = hash('sha256', json_encode($transaction));
}

$decoded_private_key = base64_decode($postData["privateKey"]);

// Sign the transaction with the private key
openssl_sign(json_encode($transactionData), $signature, $decoded_private_key, OPENSSL_ALGO_SHA256);

// Convert the signature to a base64-encoded string and add it to the transaction data
$transactionData['signature'] = base64_encode($signature);

// generate the txid and add it to the transaction data
$txid = hash('sha256', json_encode($transactionData));
$transactionData = ['txid' => $txid] + $transactionData;

// Send the transaction data, public key, and signature to the Node.js server
$nodeJsServerUrl = 'http://localhost:12200/api/sendtransactions';

// Use output buffering to capture the response from the Node.js server
ob_start();
$response = http_post_data($nodeJsServerUrl, json_encode($transactionData));
$bufferedResponse = ob_get_clean();

// Get the HTTP status code from the Node.js server response
$http_response_code = (isset($http_response_header[0])) ? explode(' ', $http_response_header[0])[1] : 500;
http_response_code($http_response_code); // Set the HTTP status code to the received status code

// Check if the response is JSON, and if so, merge it with the PHP response
if (is_json($response)) {
    $jsonResponse = json_decode($response, true);
    if (isset($jsonResponse['message'])) {
        $bufferedResponse = json_encode(array_merge($jsonResponse, ['php_message' => $bufferedResponse]));
    }
}

// Echo the response message, even if the request fails
echo $bufferedResponse;

// Function to make a POST request
function http_post_data($url, $transactionData) {
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => $transactionData,
        ),
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    return $result;
}

// Function to check if a string is JSON
function is_json($string) {
    json_decode($string);
    return (json_last_error() == JSON_ERROR_NONE);
}

?>
