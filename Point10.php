<?php

/* 
 A constant can be defined using the define () function or with the reserved word 
 * const outside the definition of a class from PHP 5.3.0. While defining () allows 
 * you to define a constant with an arbitrary expression, the reserved word const has constraints 
 * that are summarized in the following paragraph. Once the constant is defined, it cannot be changed or redefined.
 */
//Example: 
define("CONSTANTE", "Hola mundo.");
echo CONSTANTE; // muestra "Hola mundo."
echo Constante; // muestra "Constant" y se emite un aviso.
const CONSTANTE = 'Hola Mundo';

