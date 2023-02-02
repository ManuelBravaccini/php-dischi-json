<?php
$rawData = file_get_contents('./db/dischi.json');

$apiKey = 'asdawdadj8395ha8hs';

$decodedData = json_decode($rawData, true);

if (is_null($decodedData)) {
    $exposedArray = [];
} else {
    $exposedArray = $decodedData;
}

if (isset($_GET['api_key']) && $_GET['api_key'] === $apiKey) {
} else {
}


header('Content-Type: application/json');
echo $rawData;
