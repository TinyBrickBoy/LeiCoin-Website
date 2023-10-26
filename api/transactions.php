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


$ch = curl_init($nodeJsServerUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($transactionData));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$http_response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Set the HTTP response code to match the Node.js server's response code
if ($http_response_code) {
    http_response_code($http_response_code);
}

// Always display the response from the Node.js server
if ($response !== false) {
    echo $response;
} else {
    http_response_code(500);
    echo json_encode(array(
        "cb" => false,
        "status" => 500,
        "message" => "Request to Node.js server failed."
    ));
}

curl_close($ch);
?>
