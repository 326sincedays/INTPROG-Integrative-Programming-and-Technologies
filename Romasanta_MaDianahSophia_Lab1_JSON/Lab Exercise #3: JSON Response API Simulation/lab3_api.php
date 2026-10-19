<?php

header('Content-Type: application/json');

$user = [
    "id" => 1,
    "name" => "Maria",
    "email" => "maria@example.com",
    "status" => "active"
];

echo json_encode($user);
?>
