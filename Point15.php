<?php

/* 
 Associative arrays are arrays whose keys are customized strings. 
 * To access the values of an associative array, i
 * t is done in the same way as with numerical arrays, using brackets:
 */
//Example:

$animales = [
    "Muffinhead" => 14,
    "Peter" => 4,
    "Monnie" => 7,
    "Banh" => 10
];
echo $animales["Muffinhead"] . PHP_EOL; // Devuelve 14
echo $animales["Monnie"] . PHP_EOL; // Devuelve 7
