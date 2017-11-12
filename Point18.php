<?php

/*
 * El constructor if es una de las características más importantes de muchos lenguajes, 
 * incluido PHP. Permite la ejecución condicional de fragmentos de código. 
 * PHP dispone de una estructura if que es similar a la de C:
 */
//Example:
if ($a > $b) {
    echo "a es mayor que b";
}
/*
 * Con frecuencia se desea ejecutar una sentencia si una determinada condición se cumple y una sentencia diferente 
 * si la condición no se cumple. 
 * Esto es para lo que sirve else. 
 * El else extiende una sentencia if para ejecutar una sentencia en caso que la expresión en la sentencia if se evalúe como FALSE. 
 * Por ejemplo, el siguiente código deberá mostrar a es mayor que b si $a es mayor que $b y a NO es mayor que b 
 * en el caso contrario:
 */
//Example: 
if ($a > $b) {
    echo "a es mayor que b";
} else {
    echo "a NO es mayor que b";
}
/*
 * elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, 
 * extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como FALSE. 
 * Sin embargo, a diferencia de else, esa expresión alternativa 
 * sólo se ejecutará si la expresión condicional del elseif se evalúa como TRUE. 
 * Por ejemplo, el siguiente código debe mostrar a es mayor que b, a es igual que b o a es menor que b:
 */
//Example:
if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "a es igual que b";
} else {
    echo "a es menor que b";
}

/*
 * El significado de una sentencia while es simple. 
 * Le dice a PHP que ejecute las sentencias anidadas, t
 * anto como la expresión while se evalúe como TRUE. 
 * El valor de la expresión es verificado cada vez al inicio del bucle, 
 * por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, 
 * la ejecución no se detendrá hasta el final de la iteración 
 * (cada vez que PHP ejecuta las sentencias contenidas en el bucle es una iteración). 
 * A veces, si la expresión while se evalúa como FALSE desde el principio, 
 * las sentencias anidadas no se ejecutarán ni siquiera una vez.
 */
//Example:
$i = 1;
while ($i <= 10) {
    echo $i++;  /* el valor presentado sería
      $i antes del incremento
      (post-incremento) */
}

/*
 * Los bucles do-while son muy similares a los bucles while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar que al principio. 
 * La diferencia principal con los bucles while es que está garantizado que corra la primera iteración de un bucle do-while (la expresión verdadera sólo es verificada al final de la iteración), 
 * mientras que no necesariamente va a correr con un bucle while regular 
 * (la expresión verdadera es verificada al principio de cada iteración, 
 * si se evalúa como FALSE justo desde el comienzo, la ejecución del bucle terminaría inmediatamente).
 */
//Example: 
$i = 0;
do {
    echo $i;
} while ($i > 0);
/*
 * Los bucles for son los más complejos en PHP. Se comportan como sus homólogos en C. La sintaxis de un bucle for es:
 */
//Example:
for ($i = 0; $i <= 5; $i++) {
    echo($i);
}
/*
 * El constructor foreach proporciona un modo sencillo de iterar sobre arrays. 
 * foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos 
 * o una variable no inicializada. Existen dos sintaxis:
 */
//Example:
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
// $array ahora es array(2, 4, 6, 8)
unset($valor); // rompe la referencia con el último elemento

/*
 * break finaliza la ejecución de la estructura for, foreach, while, do-while o switch en curso.
 */
//Example:
$arr = array('uno', 'dos', 'tres', 'cuatro', 'pare', 'cinco');
while (list(, $val) = each($arr)) {
    if ($val == 'pare') {
        break;    /* Se puede también escribir 'break 1;' aquí. */
    }
    echo "$val<br />\n";
}

/* Utilizar el argumento opcional. */

$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "En 5<br />\n";
            break 1;  /* Sólo sale del switch. */
        case 10:
            echo "En 10; saliendo<br />\n";
            break 2;  /* Sale del switch y del while. */
        default:
            break;
    }
}
/*
 * continue se utiliza dentro de las estructuras iterativas para saltar el resto de la iteración actual del bucle y continuar
 *  la ejecución en la evaluación de la condición, para luego comenzar la siguiente iteración.
 * 
 */
//Example:
while (list($clave, $valor) = each($arr)) {
    if (!($clave % 2)) { // saltar los miembros pares
        continue;
    }
    hacer_algo($valor);
}

$i = 0;
while ($i++ < 5) {
    echo "Exterior<br />\n";
    while (1) {
        echo "Medio<br />\n";
        while (1) {
            echo "Interior<br />\n";
            continue 3;
        }
        echo "Esto nunca se imprimirá.<br />\n";
    }
    echo "Ni esto tampoco.<br />\n";
}
/*
 * La sentencia switch es similar a una serie de sentencias IF en la misma expresión. 
 * En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, 
 * y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */
//Example:
if ($i == 0) {
    echo "i es igual a 0";
} elseif ($i == 1) {
    echo "i es igual a 1";
} elseif ($i == 2) {
    echo "i es igual a 2";
}

switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
}
/*
 * El constructor declare es usado para fijar directivas de ejecución para un bloque de código. 
 * La sintaxis de declare es similar a la sintaxis de otros constructores de control de flujo:
 */
//Example:
// Esto es válido:
declare(ticks = 1);

// Esto no es válido:
const TICK_VALUE = 1;
declare(ticks = TICK_VALUE);
/*
 * return devuelve el control del programa al módulo que lo invoca. 
 * La ejecución vuelve a la siguiente expresión después del módulo que lo invoca.
 */
//Example: 

$parameter1 = "foo";
$parameter2 = "bar";
$result = include "voodoo.php";
return $parameter1 . " " . $parameter2;
/*
 * require es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. 
 * En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) 
 * lo cual permite continuar el script.
 */
//Example:
require('somefile.php');
/*
 * La sentencia include incluye y evalúa el archivo especificado.

  La siguiente documentación también se aplica a require.
 */

//Example:
function foo() {
    global $color;

    include 'vars.php';

    echo "Una $fruta $color";
}

/*
 * La sentencia require_once es idéntica a require excepto que PHP verificará si el archivo
 *  ya ha sido incluido y si es así, no se incluye (require) de nuevo.


 */

//Example:
function foo() {
    require_once('var.php');
    return $foo;
}
