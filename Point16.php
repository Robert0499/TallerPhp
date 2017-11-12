<?php

//sort — Ordena un array
//Example: 
$frutas = array("limón", "naranja", "banana", "albaricoque");
sort($frutas);
foreach ($frutas as $clave => $valor) {
    echo "frutas[" . $clave . "] = " . $valor . "\n";
}
//rsort — Ordena un array en orden inverso
//Example: 

$fruits = array("limón", "naranja", "plátano", "manzana");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
//asort — Ordena un array y mantiene la asociación de índices
//Example
$fruitss = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruitss);
foreach ($fruitss as $key => $val) {
    echo "$key = $val\n";
}
//ksort — Ordena un array por clave
//Example: 
$fruts = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruts);
foreach ($fruts as $key => $val) {
    echo "$key = $val\n";
}

//arsort — Ordena un array en orden inverso y mantiene la asociación de índices
//Example:
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

//krsort — Ordena un array por clave en orden inverso
//Example: 
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


