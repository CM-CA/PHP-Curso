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

        /* foreach ($arrayNumeros as $key => $item) {

             if ($key >= 4) {

                return false;

             }

         }*/

        for ($i = 0; $i < count($arrayNumeros); $i++) {

            $numeroArray = $arrayNumeros[$i];

            $finalComprobacion = calcularPar($numeroArray);

            if ($finalComprobacion === false) {

                return false;

                break;

            }
        }

    } else {

        return 'El numero debe ser entero';

    }

    return true;

}

function esVerdadero($numero)
{
    if (comprobarNumero($numero) === true) {
        return 'Numero correcto ';
    } else {
        return 'Numero incorrecto';
    }
}


echo esVerdadero(2222222222222222222222222222222222222222222222222222);

