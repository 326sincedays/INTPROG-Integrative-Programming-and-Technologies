<?php

$json = '{"name":"Maria","age":21,"email":"maria@example.com"}';

$obj = json_decode($json);

$arr = json_decode($json, true);

echo "Object: " . $obj->name . "<br>";
echo "Object: " . $obj->email . "<br>";

echo "Array: " . $arr["name"] . "<br>";
echo "Array: " . $arr["email"] . "<br>";
?>
