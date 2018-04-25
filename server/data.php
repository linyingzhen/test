<?php

header("content-type:application/json");
$arr = array(
    'a' => 1,
    'b' => 1,
    'c' => 1,
);

$json = json_encode($arr);

echo $json;


//$str = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
//var_dump(json_decode($str));




?>