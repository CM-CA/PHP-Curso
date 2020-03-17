<?php
$array = array(
    'key0' => 'A',
    'key1' => 'B',
    'key2' => 'C',
    'key3' => [
        'key1' => [
            'key11' => 'valor11',
            'llave' => 'value',
            'otro' => [
                '10' => 1,
                '10000' => 2]
        ]
    ]
);

echo "Nivel 0.\n";

foreach ($array as $item_1 => $value_1) {

    echo sprintf('%s => %s%s', $item_1, $value_1, PHP_EOL);

    if (is_array($value_1)) {

        echo "Nivel 1.\n";

        foreach ($value_1 as $item_2 => $value_2) {

            echo sprintf('%s => %s%s', $item_2, $value_2, PHP_EOL);

        }

        echo "Nivel 2.\n";

        if (is_array($value_2)) {

            foreach ($value_2 as $item_3 => $value_3) {

                echo sprintf('%s => %s%s', $item_3, $value_3, PHP_EOL);
            }
        }

        echo "Nivel 3.\n";

        if (is_array($value_3)) {

            foreach ($value_3 as $item_4 => $value_4) {

                echo sprintf('%s => %s%s', $item_4, $value_4, PHP_EOL);

            }

        }
    }
}

/*
CORRECCION 1:
El programa no funciona como se pide en las especificaciones. El formato de salida tiene que ser exactamente el mismo descrito
en el problema y no simplemente el valor devuelto por la función array_values()
*/
