<?php

$inputJSON = file_get_contents('php://input');
$input = $inputJSON;//json_decode($inputJSON, TRUE);
$ref = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : "null" ;
$input = $input.$ref;

echo $input;

?>