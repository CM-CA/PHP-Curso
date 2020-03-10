<?php

$edad = 17;
$altura = 1.70;

//Operadores ternarios
echo $edad > 17 && $altura < 1.60 ? "Puedes pasar\n" : "No puedes pasar\n"; //No permite pasar
echo $edad <= 17 && $altura >= 1.60 ? "Puedes pasar\n" : "No puedes pasar\n"; //Permite pasar

//if-elseif
// switch-case

$verdadero = "2";

if ($verdadero == "2") {
    $verdadero = ($verdadero - 1);
    echo $verdadero . "\n";
} elseif ($verdadero != 2) {
    $verdadero = "2";
    echo "$verdadero\n";
} else {
    return $verdadero;
}

echo $verdadero . "\n";
switch ($verdadero) {

    case "1":
        echo "Caso 1: Valor inicial\n";
        break;

    case "2":
        echo "Caso 2: Sustituye el valor inicial por el valor deseado\n";
        break;

    default:
        echo "Caso Default";
}

// do while + for

$variable_condicional = 7;

//mientras sea menor a 7, se ejecuta el bucle.

while ($variable_condicional <= 10) {
    //suma +1 a la variable hasta llegar a 10
    echo $variable_condicional++;
}//Fin de bucle al llegar a 10.
echo "\n";
//bucle for que imprime del 0 al 9.
/*Esto ocure porque:
1º: Inicio la variable a 7.
2º: Sumamos +1 hasta que obtiene un valor 10 con el while
3º: El valor i incrementa hasta el valor de la Variable (10)
*/
for ($i = 0; $i < $variable_condicional; $i++) {
    echo $i;
}

//do-while con for

$sandwich = "Hazme un sandwich";
$mujer = 1;

do {
    for ($me = 1; $me <= $mujer; $me++) {
        echo "\n$sandwich\n";
    }
    $mujer++;
    echo "\nAqui tienes tu sandwich\n";
} while ($mujer >= 0 && $mujer <= 1);

