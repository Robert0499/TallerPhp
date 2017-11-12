<?php

/* 
 the anonymous function or clause (closure). Known to javascript programmers. 
 * A clause is a function that is executed in its own context. This means that the context in which 
 * the function is defined will remain until it is closed. 
 * With which we can declare a function without a name and store it in a variable. 
 * And to call the clause we will call the variable followed by the opening and closing parentheses.
The syntax for defining a closure is very simple:
 */

//Example: 
$cadena = "Esto es un ejemplo!";  
 $clausula = function($cadena) {  
       echo $cadena;  
     };   
 $clausula($cadena);  //Esto es un ejemplo!

