<?php

function Heron($A, $B, $C)
{
    $semiperimetro = ($A + $B + $C) / 2;

    return sqrt($semiperimetro * ($semiperimetro - $A) * ($semiperimetro - $B) * ($semiperimetro - $C));
}

function comprobarTriangulo($lA, $lB, $lC)
{
    // Si se cumple la propiedad de que la suma de los dos lados menores es menor a la del lado restante, es un triángulo.


    if ($lB < $lC || $lC < $lA) {

        $resultadoA = $lB + $lC;

        if ($resultadoA < $lA) {

            return true;
        }
    } elseif ($lA < $lC || $lB < $lA) {

        $resultadoB = $lA + $lC;

        if ($resultadoB < $lB) {

            return true;
        }
    } elseif ($lC < $lB || $lC < $lA) {

        $resultadoC = $lA + $lB;

        if ($resultadoC < $lC) {

            return true;
        }
    }

    return false;
}

// Determinar triangulos

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
}

echo comprobarTriangulo(4, 4, 1);
echo tipoTriangulo(4, 1, 1);


/* CORRECCION 1

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,3,4)

CORRECION 2

El funcionamiento es incorrecto. La prueba hecha fue: tipo_triangulo(4,1,1)
*/
