<?php

/*
  Antes de hablar del uso de los espacios de nombres es importante entender
 * cómo sabe PHP qué elemento del código del espacio de nombres se requiere. 
 * Se puede hacer una simple analogía entre los espacios de nombres de PHP y el sistema de ficheros. 
 * Existen tres maneras de acceder a un fichero en el sistema de ficheros:

  Nombre de fichero relativo como foo.txt. Se resuelve con directorio_actual/foo.txt donde directorio_actual
 * es el directorio actualmente ocupado. Así, si el directorio actual es /home/foo, el nombre se resuelve con /home/foo/foo.txt.
  Nombre de ruta relativa como subdirectorio/foo.txt. Se resuelve con directorioactual/subdirectorio/foo.txt.
  Nombre de ruta absoluta como /main/foo.txt. Se resuelve con /main/foo.txt.
 */

//Example:

namespace Foo\Bar\subespacio_de_nombres;

const FOO = 1;

function foo() {
    
}

class foo {

    static function método_estático() {
        
    }

}
