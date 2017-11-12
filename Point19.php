<?php
/*
 * Any information can be passed to the functions by means of the list of arguments, 
 * which is a list of comma delimited expressions. The arguments are evaluated from left to right.

PHP supports the passage of arguments by value (default), the passage by reference, 
 * and default argument values. Variable length argument lists are also supported.
 */
//Example: 
function tomar_array($entrada)
{
    echo "$entrada[0] + $entrada[1] = ".$entrada[0]+$entrada[1];
}

function añadir_algo(&$cadena)
{
    $cadena .= 'y algo más.';
}
$cad = 'Esto es una cadena, ';
añadir_algo($cad);
echo $cad;    // imprime 'Esto es una cadena, y algo más.'


function hacer_café($tipo = "capuchino")
{
    return "Hacer una taza de $tipo.\n";
}
echo hacer_café();
echo hacer_café(null);
echo hacer_café("espresso");

function hacer_café($tipos = array("capuchino"), $fabricanteCafé = NULL)
{
    $aparato = is_null($fabricanteCafé) ? "las manos" : $fabricanteCafé;
    return "Hacer una taza de ".join(", ", $tipos)." con $aparato.\n";
}
echo hacer_café();
echo hacer_café(array("capuchino", "lavazza"), "una tetera");
