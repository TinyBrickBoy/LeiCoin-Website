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



http_response_code(200);
echo json_encode(array(
    "message" => $signature;
));

?>
