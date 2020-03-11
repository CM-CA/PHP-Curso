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
    if ($ladoA == $ladoB && $ladoB == $ladoC) { //Todos los lados iguales
        // $areaEq=Heron($ladoA,$ladoB,$ladoC);
        echo "Triangulo Equilatero y su area es ";
    } elseif ($ladoA != $ladoB && $ladoB != $ladoC) { //Todos los lados distintos
        // $areaEs=Heron($ladoA,$ladoB,$ladoC);
        echo "Triangulo Escaleno y su area es ";
    } else { //Dos lados iguales y uno distinto
        echo "Triangulo Isosceles y su area es ";
    }

}

echo tipo_triangulo(1, 2, 3) . Heron(1, 2, 3);