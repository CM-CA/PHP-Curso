<?php
/*Pedir un sandwich..
Si la mujer tiene estado 0-> hacerlo tu
Si la mujer tiene estado 1-> Ir a la cocina
Si cocina == true -> hacer sandwich
si cocina == false -> volver salon.
*/

$mujer = 2;

//comprobar estado mujer
if ($mujer == 1) {
    $mujer = true;
    echo $mujer;
    return $mujer;
} else {
    $mujer = false;
    echo $mujer;
    return $mujer;

}