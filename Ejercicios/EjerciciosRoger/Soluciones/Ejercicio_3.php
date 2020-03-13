<?php

function serie($numero)
{

    if (0 < $numero) {
        $resultado = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $resultado += 1 / $i;
        }

    } else {

        $resultado = 'El numero es negativo';
    }

    return $resultado;
}

echo serie(-12);

/*
CORRECION 1
La variable $contador no es un contador, es un resultado. Llamarla contador incita a confusion.
*/
