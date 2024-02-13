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

// Send a GET request to fetch the UTXOs
$address = $postData["senderAddress"];
$utxosUrl = "http://127.0.0.1:12200/api/getutxos?address=$address";

$ch = curl_init($utxosUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$utxosResponse = curl_exec($ch);
$http_response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_response_code !== 200) {
    http_response_code($http_response_code);
    echo $utxosResponse;
    exit;
}

$utxos = json_decode($utxosResponse, true);

$requiredAmount = $postData["amount"];
$remainingAmount = $requiredAmount;
$selectedUtxos = array();

// Calculate the change amount and add it as an output
foreach ($utxos["data"] as $utxoID => $utxoData) {
    if ($remainingAmount <= 0) {
        break; // Stop the loop if the required amount is met
    }
    
    $selectedUtxoArray = explode("_", $utxoID);

    $selectedUtxo = array(
        "txid" => $selectedUtxoArray[0],
        "index" => $selectedUtxoArray[1]
    );

    // Add the UTXO to the input
    $selectedUtxos[] = $selectedUtxo;
    
    // Update the remaining amount
    $remainingAmount -= $utxoData["amount"];
}

// Create a transaction
$transactionData = array(
    'senderAddress' => $postData["senderAddress"],
    "publicKey" => $postData["publicKey"],
    "input" => $selectedUtxos,
    "output" => [
        array(
            'recipientAddress' => $postData["recipientAddress"],
            'amount' => $requiredAmount * 1
        ),
        // Add an output for the sender to receive the change
        array(
            'recipientAddress' => $postData["senderAddress"],
            'amount' => $remainingAmount * -1
        )
    ]
);

function getPreparedObjectForHashing($obj, $excludedKeys = []) {
    $deepSort = function ($input) use (&$deepSort, $excludedKeys) {
        if (!is_array($input) && !is_object($input)) {
            return $input;
        }

        if (is_array($input)) {
            return array_map($deepSort, $input);
        }

        $sortedObj = [];
        $inputArray = (array) $input;
        $keys = array_keys($inputArray);
        sort($keys);

        foreach ($keys as $key) {
            if (!in_array($key, $excludedKeys)) {
                $sortedObj[$key] = $deepSort($inputArray[$key]);
            }
        }

        return (object) $sortedObj;
    };

    return $deepSort($obj);
}


$decoded_private_key = base64_decode($postData["privateKey"]);

// Sign the transaction with the private key
openssl_sign(getPreparedObjectForHashing($transactionData) , $signature, $decoded_private_key, OPENSSL_ALGO_SHA256);

// Convert the signature to a base64-encoded string and add it to the transaction data
$transactionData['signature'] = base64_encode($signature);

// generate the txid and add it to the transaction data
$txid = hash('sha256', getPreparedObjectForHashing($transactionData));
$transactionData = ['txid' => $txid] + $transactionData;

// Send the transaction data, public key, and signature to the Node.js server
$nodeJsServerUrl = 'http://127.0.0.1:12200/api/sendtransactions';


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
        "message" => "Request to Node.js server failed."
    ));
}

curl_close($ch);
?>
