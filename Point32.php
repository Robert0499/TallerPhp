<?php

/* 
elow is an example of how to implement a polymorphic call to an object method.

To do this we will create a simple hierarchy of classes where we will have a base 
 * class called "classPoligono" and their respective extended classes:"classTriangle","classSquare","classRectangle".
 *  Each of these classes will have a common method called "calculus" and whose function will be to show the mathematical f
 * ormula for calculating the area of the geometric figure in question.

Once we have defined our classes we will create the function that will make the polymorphic 
 * call to the method "calculation" whose execution will vary depending on the object that implements it.
 */
/*
Empezaremos definiendo la jerarquia de clases
*/
class classPoligono
{
  function calculo()
  {
  echo 'El area depende del tipo de poligono';
  }
}

class classCuadrado extends classPoligono
{
  function calculo()
  {
  echo 'area de un cuadrado : a=l*l<br>';
  }
}

class classRectangulo extends classPoligono
{
  function calculo()
  {
  echo 'area de un rectangulo : a=b*h<br>';
  }
}

class classTriangulo extends classPoligono
{
  function calculo()
  {
  echo 'area de un triangulo : a=(b*h)/2<br>';
  }
}
/* fin definicion de la jerarquia de clases */

/* 
definicion de la funcion encargada de realizar las llamada 
polimorfica al metodo "calculo"
A destacar que en la definicion de la funcion definimos el tipo 
parametro que pasamos por referencia, esto no es obligatorio 
en PHP, pero nos ayuda a entender el concepto y asi poder aplicarlo 
en otros lenguajes mas estrictos.
 */
function area(classPoligono $obj)
{
  $obj->calculo();
}

/*
Creamos los objetos necesarios
*/
$cuadrado = new classCuadrado;
$rectangulo = new classRectangulo;
$triangulo = new classTriangulo;

/*
Ejecutamos la funcion encargada 
de realizar la llamada polimorfica
*/
area($cuadrado);
area($rectangulo);
area($triangulo);

