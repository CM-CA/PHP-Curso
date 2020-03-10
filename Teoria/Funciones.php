<?php
//pasar datos por valor
function incrementa_valor($numero)
{
    $numero++;
    return $numero;
}

$valor = 1;
echo incrementa_valor($valor);

//por referencia

function incremento_valor(&$numero2)
{
    $numero2++;
    return $numero2;
}

$valor_ref = 2;
echo incremento_valor($valor_ref);

//cambio a mayusculas por referencia

function mayusculas(&$frase)
{
    $frase = strtolower($frase);
    $frase = ucfirst($frase);
    return $frase;
}

$frase = "hOlA MuNdO";
echo mayusculas($frase);