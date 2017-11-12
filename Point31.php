<?php

/* 
The visibility of a property, a method or (from d PHP 7.1.0) a constant can be defined 
 * by putting one of the reserved words public, protected or private in front of your declaration. 
 * Class members declared as' public' can be accessed from anywhere; members declared as' protected' 
 * can only be accessed from the same class or through inherited classes. Members declared private 
 * can only be accessed from the class that defined them.
 */
class MyClass2 extends MyClass
{
    // Se pueden redeclarar las propiedades pública y protegida, pero no la privada
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public;    // Funciona bien
echo $obj2->protected; // Error Fatal
echo $obj2->private;   // Undefined
$obj2->printHello();   // Muestra Public2, Protected2, Undefined

