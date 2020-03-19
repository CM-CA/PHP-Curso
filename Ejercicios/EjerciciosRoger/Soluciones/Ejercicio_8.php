<?php
function calcularPar($numero)
{
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

function comprobarNumero($numero)
{
    if (is_int($numero)) {
        $arrayNumeros = str_split($numero);
        foreach ($arrayNumeros as $key => $item) {
            if ($key >= 4) {
                printf('Te has pasado');
            } else {

            }
        }
    } else {
        return 'El numero debe ser entero';
    }
}

echo comprobarNumero(12345);


