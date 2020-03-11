<?php
/*PROBLEMA 1:
En una tienda departamental ofrecen descuentes a los clientes en la Navidad, de acuerdo con el monto de su compra.
El criterio para establecer el descuento se muestra abajo.
Construye el correspondiente programa en PHP que, al recibir como parametro el total de la compra del cliente, obtenga
 el precio real que debe pagar luego de aplicar el descuento
correspondiente:

Compra < $800 		-> Descuento 0%
$800 <= Compra >= $1500 -> Descuento 10%
$1500 < Compra <= $5000 -> Descuento 15%
$5000 < Compra 		-> Descuento 20%

NOTA: Ejecuta el codigo como un script y no através de un servidor
*/



function calcula_descuento($precio_compra)
{
    if ($precio_compra < 800) {

        echo "0% Descuento - Total: " . $precio_compra;

    } elseif (800 >= $precio_compra or 1500 >= $precio_compra) {

        $desc = $precio_compra * 0.01;

        $total = $precio_compra - $desc;

        echo "10% desc. - Total: " . $total;

    } elseif (1500 < $precio_compra and $precio_compra <= 5000) {

        $desc1 = $precio_compra * 0.015;

        $total1 = $precio_compra - $desc1;

        echo "15% desc. - Total: " . $total1;

    } elseif (5000 < $precio_compra) {

        $desc2 = $precio_compra * 0.02;

        $total2 = $precio_compra - $desc2;

        echo "20% desc. - Total: " . $total2;

    } else {

        echo "Error";

    }
}

calcula_descuento(500);

/* CORRECTIONES 

===== elseif (800 >= $precio_compra or 1500 >= $precio_compra) { //Entra en el bucle =====

El comentario no tiene nada que ver con la linea. Los comentarios se usan para aclarar cosas que no sean obvias

¿Por qué en una condición usas "OR" y en otra "&&" (sintaxis)? Usa simbolos o texto, pero no mezcles

Ese código se puede optimizar:
	- Si llamas a una funcion que se llama calcula_descuento(), la función tiene que hacer lo que dice su nombre, no mostrar nada por pantalla
	- Fijate que estás repitiendo lineas de código dentros de los IF. Simplifica las cosas y no te repitas
	- Separa el codigo, usa espacios. Tiene que ser fácil de leer
*/
