<?php

function Heron($A, $B, $C)
{
    $semiperimetro = ($A + $B + $C) / 2;
    $area = sqrt($semiperimetro * ($semiperimetro - $A) * ($semiperimetro - $B) * ($semiperimetro - $C));
    return $area;
}

// Determinar triangulos

function tipo_triangulo($ladoA, $ladoB, $ladoC)
{
    if ($ladoA == $ladoB and $ladoB == $ladoC) { //Todos los lados iguales
        $areaEq = Heron($ladoA, $ladoB, $ladoC);
        echo "Triangulo Equilatero y su area es " . $areaEq;
    } elseif ($ladoA != $ladoB and $ladoB != $ladoC and $ladoA != $ladoC) { //Todos los lados distintos
        $areaEs = Heron($ladoA, $ladoB, $ladoC);
        echo "Triangulo Escaleno y su area es " . $areaEs;
    } else { //Dos lados iguales y uno distinto
        $areaIs = Heron($ladoA, $ladoB, $ladoC);
        echo "Triangulo Isosceles y su area es " . $areaIs;
    }

}

echo tipo_triangulo(4, 4, 4);

/* CORRECCION 1

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,3,4)

CORRECION 2

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,1,1)
*/
