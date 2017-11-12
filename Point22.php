<?php

/* 
 Es un array asociativo que contiene variables de sesión disponibles para el script actual
 */
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"]=$value;
