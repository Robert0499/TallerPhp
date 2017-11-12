<?php

/* 
 Modularity consists of dividing a program into modules that can be compiled separately, 
 * but will have connections to other modules.

Modularity also has principles and these are as follows:

Ability to break down a complex system.
Ability to compose through its modules.
System understanding in parts.
 */
// Leemos la variable que indica que página queremos cargar.
if(empty($_GET['modulo'])) {
  $pagina='home.php';
}
else {
 $pagina=$_GET['modulo'];
}
include('includes/header.php');
include('modulos/'.$pagina);
include('includes/footer.php');

