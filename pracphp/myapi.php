<?php

$url = $_REQUEST['rquest'];
// echo 'URL - REQUEST: ' . $url;
$components = explode("/", $url);

$value = (float)$components[2];
$square = $value * $value;

// echo "\nSQUARE: " . $square;

header("Content-Type: application/json; charset=UTF-8");

$result = (object) array(
    'value' => $value,
    'square' => $square
);

// echo $value;
// echo $square;
// echo print_r($result);

echo json_encode($result);

?>