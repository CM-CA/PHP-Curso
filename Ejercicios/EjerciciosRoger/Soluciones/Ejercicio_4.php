<?php

function primos($numero)
{

    if (0 < $numero and is_int($numero)) {

        foreach (range(1, $numero + 1) as $value) {
            echo $value;
        }
    } else {
        echo "El numero debe ser positivo y entero";
    }

}

echo primos(2);

/*
CORRECCION 1

El enunciado dice que el calculo se hace con un numero entero, pero tu estás usando un numero real
*/
