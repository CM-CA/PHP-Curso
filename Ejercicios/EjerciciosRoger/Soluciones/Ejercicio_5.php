<?php

function arbolito($numero)
{
    if (0 < $numero) {

        if (0 < $numero) {
            //pintamos el escalon del 1 a N
            for ($i = 1; $i <= $numero; $i++) {

                echo "\n";

                for ($j = 1; $j <= $i; $j++) {

                    echo $j . " ";
                }
            }

            //Pinta de N a 1
            for ($i = $numero - 1; $i >= 1; $i--) {

                echo "\n";

                for ($j = 1; $j <= $i; $j++) {

                    echo $j . " ";

                }
            }

        }
    }
    return "";
}


echo arbolito(6);



/*
CORRECCION 1:
El resultado que genera eso es:
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
1 2 3 4 5 6 5
1 2 3 4 5 4
1 2 3 4 3
1 2 3 2
1 2 1
1

El ultimo paso está mal

¿Por qué utilizas print_r() cuando estás usando los echo dentro de los for? Como extra, ya que has descubierto la funcion print_r(),
quiero que el resultado se pinta con esa función y no con los echo
*/
