<?php
/*
function primos($numero)
{

    if (0 < $numero && is_int($numero)) { //Comprueba que es mayor que 0 y entero
        foreach (range($numero, 1) as $value) {
            if (gmp_prob_prime($value) === 2) {
                echo $value . ' ';
            }
        }
    } else {
        echo 'El numero debe ser positivo y entero';
    }
    return '';
}

echo primos(27);

*/

function calculaPrimos($numero)
{
    $data = [];
    //Comprobamos que sea superior a 0, entero.
    if ($numero > 1 && is_int($numero)) {
        for ($i = 2; $i <= $numero; $i++) {
            if ($i === 2) {
                $data[] = $i;
                continue;
            }
            if ($i % 2 !== 0) {
                $esprimo = true;
                for ($j = 0; $j < count($data); $j++) {
                    echo $i . " ";
                    print_r($data);
                    if ($i % $data[$j] === 0) {
                        $esprimo = false;
                        break;
                    }
                }
                if ($esprimo === true) {
                    $data[] = $i;
                }
            }
        }


    } else {
        echo 'El numero debe ser positivo y entero';
    }
    return $data;
}

print_r(calculaPrimos(12));

/*
CORRECCION 1

El enunciado dice que el calculo se hace con un numero entero, pero tu estás usando un numero real
*/
