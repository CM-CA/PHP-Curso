<?php

// Clase mujer con sus dos estados
class Mujer
{

    var $estado = "libre";

    /*
  * @param string $estado
  */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        echo "$estado";
        return $estado;
    }
}


$mujer = new Mujer();
$mujer->setEstado("Zorreando");

