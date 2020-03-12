<?php

function Heron($A, $B, $C)
{
    $semiperimetro = ($A + $B + $C) / 2;

    $area = sqrt($semiperimetro * ($semiperimetro - $A) * ($semiperimetro - $B) * ($semiperimetro - $C));

    return $area;
}

// Determinar triangulos

function tipoTriangulo($ladoA, $ladoB, $ladoC)
{
    if ($ladoA == $ladoB and $ladoB == $ladoC) { //Todos los lados iguales

        $areaEq = Heron($ladoA, $ladoB, $ladoC);

        echo "Triangulo Equilatero y su area es " . $areaEq;

        return $areaEq;

    } elseif ($ladoA != $ladoB and $ladoB != $ladoC and $ladoA != $ladoC) { //Todos los lados distintos

        $areaEs = Heron($ladoA, $ladoB, $ladoC);

        echo "Triangulo Escaleno y su area es ";

        return $areaEs;

    } elseif ($ladoA = $ladoB or $ladoB = $ladoC) { //Dos lados iguales y uno distinto

        $areaIs = Heron($ladoA, $ladoB, $ladoC);

        echo "Triangulo Isosceles y su area es ";

        return $areaIs;

    } else {

        return "error";

    }

}

echo tipoTriangulo(5, 4, 5);

/* CORRECCION 1

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,3,4)

CORRECION 2

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,1,1)
*/
