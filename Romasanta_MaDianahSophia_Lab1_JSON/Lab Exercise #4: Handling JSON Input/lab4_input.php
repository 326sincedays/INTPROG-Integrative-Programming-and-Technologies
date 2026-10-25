<?php

$rawData = file_get_contents('php://input');

$data = json_decode($rawData, true);

echo "Username: " . $data["username"] . "<br>";
echo "Password: " . $data["password"];
?>
