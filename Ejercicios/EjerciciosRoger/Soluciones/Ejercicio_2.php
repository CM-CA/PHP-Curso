<?php

function Heron($A, $B, $C)
{
    $semiperimetro = ($A + $B + $C) / 2;

    return sqrt($semiperimetro * ($semiperimetro - $A) * ($semiperimetro - $B) * ($semiperimetro - $C));
}

// Determinar triangulos

function tipoTriangulo($ladoA, $ladoB, $ladoC)
{
    if ($ladoA === $ladoB && $ladoB === $ladoC) { //Todos los lados iguales

        $nombre = 'Equilatero';
        $area = Heron($ladoA, $ladoB, $ladoC);


    } elseif ($ladoA !== $ladoB && $ladoB !== $ladoC && $ladoA !== $ladoC) { //Todos los lados distintos

        $nombre = 'Escaleno';
        $area = Heron($ladoA, $ladoB, $ladoC);


    } elseif ($ladoC === $ladoB || $ladoA === $ladoC) { //Dos lados iguales y uno distinto

        $nombre = 'Isosceles';
        $area = Heron($ladoA, $ladoB, $ladoC);


    } else {

        return 'error';

    }

    return 'El triangulo es ' . $nombre . ' y su area es ' . $area;
}

echo tipoTriangulo(4, 1, 1);

/* CORRECCION 1

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,3,4)

CORRECION 2

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,1,1)
*/
