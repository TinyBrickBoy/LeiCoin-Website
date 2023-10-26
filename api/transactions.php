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
$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/json',
        'content' => json_encode($transactionData),
    ),
));

$response = @file_get_contents($nodeJsServerUrl, false, $context);
$http_response_code = $http_response_header[0];

if ($http_response_code) {
    list($protocol, $code, $text) = explode(' ', $http_response_code, 3);
    http_response_code((int)$code);
}

// Echo the response message, even if the request fails
if ($response) {
    echo $response;
} else {
    echo json_encode(array(
        "cb" => false,
        "message" => "Request to Node.js server failed."
    ));
}

?>
