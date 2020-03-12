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

        $nombre = "Equilatero";
        $area = Heron($ladoA, $ladoB, $ladoC);


    } elseif ($ladoA != $ladoB and $ladoB != $ladoC and $ladoA != $ladoC) { //Todos los lados distintos

        $nombre = "Escaleno";
        $area = Heron($ladoA, $ladoB, $ladoC);


    } elseif ($ladoA = $ladoB or $ladoB = $ladoC) { //Dos lados iguales y uno distinto

        $nombre = "Isosceles";
        $area = Heron($ladoA, $ladoB, $ladoC);


    } else {

        return "error";

    }

    return "El triangulo es " . $nombre . " y su area es " . $area;
}

echo tipoTriangulo(4, 5, 6);

/* CORRECCION 1

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,3,4)

CORRECION 2

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,1,1)
*/
