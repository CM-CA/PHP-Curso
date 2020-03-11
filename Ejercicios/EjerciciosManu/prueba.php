<?php
$num = 6;
//bucle para el triángulo superior
for ($n = 1; $n <= $num; $n++) {
    echo $n . " \n";
    for ($m = 1; $m <= $n; $m++) {
        echo $m . " ";
    }
}

//bucle para el triángulo invertido
for ($n = $num - 1; $n >= 1; $n--) {
    echo str_pad('', $n, '*') . "\n";
}