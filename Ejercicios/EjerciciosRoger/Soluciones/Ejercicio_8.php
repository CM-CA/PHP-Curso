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
            }
        }
        for ($i = 0; $i < count($arrayNumeros); $i++) {
            $numeroArray = $arrayNumeros[$i];
            $finalComprobacion = calcularPar($numeroArray);
            if ($finalComprobacion === false) {
                echo 'El numero no es valido';
                break;
            }
        }

    } else {
        return 'El numero debe ser entero';
    }
    return 'El numero es valido';
}

echo comprobarNumero(2124);


