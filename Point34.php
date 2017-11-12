<?php

/* 
Una de las ventajas de encapsular los elementos de una entidad es que podemos «ocultar»
 * , proteger, los que no se necesitan fuera de la clase. Esto nos puede parecer trivial 
 * para los que venimos del desarrollo de webs normales, páginas corporativas de contenidos, 
 * en las que normalmente escribe uno mismo desde la primera hasta la última línea del código,
 *  pero cuando la aplicación es monstruosa e intervienen varias manos resulta más clara su utilidad.
 */
class MetodosAcceso {
// esta propiedad es pública, accesible desde fuera
public $variable1 = 1;
// esta propiedad está protegida, solo es accesible dentro de la clase
private $variable2 = 2;
// esta propiedad es privada, accesible en la clase y sus subclases
protected $variable3 = 3;
}

