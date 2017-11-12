<?php

/* 
Las propiedades de clases deben ser definidas como 'public', 'private' o 'protected'. 
 * Si se declaran usando var, serán definidas como 'public'.
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public;    // Funciona bien
echo $obj->protected; // Error Fatal
echo $obj->private;   // Error Fatal
$obj->printHello();   // Muestra Public, Protected y Private


/**
 * Definición de MyClass2
 */
