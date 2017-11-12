<?php

/* 
 La definición básica de una clase comienza con la palabra reservada class, seguida de un nombre de clase,
 *  y continuando con un par de llaves que encierran las definiciones de las propiedades y métodos pertenecientes a dicha clase.

El nombre de clase puede ser cualquier etiqueta válida, siempre que no sea una palabra reservada de PHP. 
 * Un nombre válido de clase comienza con una letra o un guión bajo, seguido de una cantidad arbitraria de letras, n
 * úmeros o guiones bajos. 
 * Como expresión regular, se expresaría de la siguiente forma
 */
//Example: 
class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}

