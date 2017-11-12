<?php

/* 
 PHP 5 permite a los desarrolladores declarar métodos constructores para las clases. 
 * Aquellas que tengan un método constructor lo invocarán en cada nuevo objeto creado,
 *  lo que lo hace idóneo para cualquier inicialización que el objeto pueda necesitar antes de ser usado.
 */
//Example construct: 
class BaseClass {
   function __construct() {
       print "En el constructor BaseClass\n";
   }
}



/*
 * introduce un concepto de destructor similar al de otros lenguajes orientados a objetos, 
 * tal como C++. El método destructor será llamado tan pronto como no hayan otras referencias a un objeto determinado, 
 * o en cualquier otra circunstancia de finalización.
 */
//Example: 
class MyDestructableClass {
   function __construct() {
       print "En el constructor\n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "Destruyendo " . $this->name . "\n";
   }
}

/*
 * El método __toString() permite a una clase decidir cómo comportarse cuando se le trata como un string. 
 * por ejemplo, lo que echo $obj; mostraría. Este método debe devolver un string, si no se emitirá un nivel de error fatal 
 */
//Example: 
// Declarar una clase simple
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hola Mundo');
echo $class;