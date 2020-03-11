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
    } elseif (800 <= $precio_compra && $precio_compra >= 1500 && $precio_compra < 5000) {
        $desc = $precio_compra * 0.01;
        $total = $precio_compra - $desc;
        echo "10% desc. - Total: " . $total;
    } elseif (1500 < $precio_compra && $precio_compra <= 5000) {
        $desc = $precio_compra * 0.015;
        $total = $precio_compra - $desc;
        echo "15% desc. - Total: " . $total;
    } elseif (5000 < $precio_compra) {
        $desc = $precio_compra * 0.02;
        $total = $precio_compra - $desc;
        echo "20% desc. - Total: " . $total;
    } else {
        echo "Error";
    }

}

calcula_descuento(800);