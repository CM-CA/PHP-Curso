<?php

function arbolito($numero)
{
    if (0 < $numero) {
//pintamos el escalon del 1 a N
        for ($i = 1; $i <= $numero; $i++) {

            echo $i . " \n";

            for ($j = 1; $j <= $i; $j++) {

                echo $j . " ";
            }
        }

//Pinta de N a 1
        for ($i = $numero - 1; $i >= 1; $i--) {

            echo $i . " \n";

            for ($j = 1; $j <= $i; $j++) {

                echo $j . " ";

            }
        }

    }

}


print_r(arbolito(6));