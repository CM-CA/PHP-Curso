<?php

function primos($numero)
{

    if (0 < $numero and ($numero % 2) == 0) {

    } else {
        echo "El numero debe ser positivo y entero";
    }
}

echo primos(2.1);