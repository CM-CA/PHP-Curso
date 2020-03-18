<?php

function Heron($A, $B, $C)
{
    $semiperimetro = ($A + $B + $C) / 2;

    return sqrt($semiperimetro * ($semiperimetro - $A) * ($semiperimetro - $B) * ($semiperimetro - $C));
}

function ladomayorTriangulo($lA, $lB, $lC)
{
    //comprobamos que lado es el mayor

    if ($lA >= $lB && $lB >= $lC) {

        return 'lado A ' . $lA;

    } elseif ($lB >= $lA && $lA >= $lC) {

        return 'lado B ' . $lB;

    } elseif ($lC >= $lB && $lB >= $lA) {

        return 'lado C ' . $lC;

    } else {
        return 'No es triangulo';
    }
//comprobarTriangulo($lA,$lB,$lC);
}

function comprobarTriangulo($tA, $tB, $tC)
{
    // Si se cumple la propiedad de que la suma de los dos lados menores es menor a la del lado restante, es un triángulo.
    // comprobar equilatero. todos lados iguales.

    if ($tA == $tB && $tB == $tC) {

        return 'Equilatero';

    }
    if (($tB + $tC) < $tA && ($tA + $tC) < $tB && ($tA + $tB) < $tC) {

        return 'es triangulo';

    } else {

        return 'No es un triangulo';

    }
}
// Determinar triangulos
/*
function tipoTriangulo($ladoA, $ladoB, $ladoC)
{
    if ($ladoA === $ladoB && $ladoB === $ladoC) { //Todos los lados iguales

        $esTriangulo = comprobarTriangulo($ladoA, $ladoB, $ladoC);

        if ($esTriangulo === true) {

            $nombre = 'Equilatero';

            $area = Heron($ladoA, $ladoB, $ladoC);

            if (is_nan($area) === true) {

                return 'El triangulo es ' . $nombre . ' y su area no se puede calcular';
            }
        }
    } elseif ($ladoA !== $ladoB && $ladoB !== $ladoC && $ladoA !== $ladoC) { //Todos los lados distintos

        $esTriangulo = comprobarTriangulo($ladoA, $ladoB, $ladoC);

        if ($esTriangulo === true) {

            $nombre = 'Escaleno';

            $area = Heron($ladoA, $ladoB, $ladoC);

            if (is_nan($area) === true) {

                return 'El triangulo es ' . $nombre . ' y su area no se puede calcular';
            }
        }


    } elseif ($ladoC === $ladoB || $ladoA === $ladoC || $ladoA === $ladoB) { //Dos lados iguales y uno distinto
        $esTriangulo = comprobarTriangulo($ladoA, $ladoB, $ladoC);
        if ($esTriangulo === true) {
            $nombre = 'Isosceles';
            $area = Heron($ladoA, $ladoB, $ladoC);
            if (is_nan($area) === true) {
                return 'El triangulo es ' . $nombre . ' y su area no se puede calcular';
            }
        }
    } else {

        return 'error';

    }

    return 'El triangulo es ' . $nombre . ' y su area es ' . $area;
}*/

echo ladomayorTriangulo(2, 3, 2);
//echo comprobarTriangulo(4, 3, 4);
//echo tipoTriangulo(4, 1, 1);


/* CORRECCION 1

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,3,4)

CORRECION 2

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,1,1)
*/
