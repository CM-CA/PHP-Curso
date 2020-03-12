<?php
$array = array(
    "key0" => "A",
    "key1" => "B",
    "key2" => "C",
    "key3" => ["key1" => ["key11" => "valor11", "llave" => "value", "otro" => ["10" => 1, "10000" => 2]]]);

print_r(array_values($array));

/*
CORRECCION 1:
El programa no funciona como se pide en las especificaciones. El formato de salida tiene que ser exactamente el mismo descrito
en el problema y no simplemente el valor devuelto por la función array_values()
*/
