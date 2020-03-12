<?php

function serie($numero)
{

    if (0 < $numero) {
        $contador = 0;
        for ($i = 1; $i <= $numero; $i++)
            $contador += 1 / $i;
        return $contador;

    } else {
        echo "El numero es negativo";
    }
}

echo serie(5);

/*
CORRECION 1
La variable $contador no es un contador, es un resultado. Llamarla contador incita a confusion.
*/
