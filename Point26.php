<?php

/* 
 Las propiedades y métodos de una clase viven en «espacios de nombres» diferentes, por tanto, 
 * es posible tener una propiedad y un método con el mismo nombre. Al hacer referencia tanto a una propiedad 
 * como a un método se utiliza la misma notación, y si se accederá a la propiedad o se llamará al método, 
 * solamente depende del contexto, es decir, si el empleo es el acceso a una variable o la llamada a una función.
 */
//Example: 
class Foo
{
    public $bar = 'propiedad';
    
    public function bar() {
        return 'método';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;


