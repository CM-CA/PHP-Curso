<?php

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

/*
CORRECCION 1

El enunciado dice que el calculo se hace con un numero entero, pero tu estás usando un numero real
*/
