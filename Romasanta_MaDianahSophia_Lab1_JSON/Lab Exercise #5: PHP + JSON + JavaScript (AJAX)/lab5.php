<?php

header('Content-Type: application/json');

$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);

$name = $data["name"];

$response = [
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
];

echo json_encode($response);
?>
