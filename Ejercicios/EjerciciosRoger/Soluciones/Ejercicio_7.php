<?php
$array = array(
    "key0" => "A",
    "key1" => "B",
    "key2" => "C",
    "key3" => ["key1" => ["key11" => "valor11", "llave" => "value", "otro" => ["10" => 1, "10000" => 2]]]);

print_r(array_values($array));