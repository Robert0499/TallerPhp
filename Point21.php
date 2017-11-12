<?php

/* 
 $_SERVER es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script. 
 * Las entradas de este array son creadas por el servidor web. No hay garantía que cada servidor web proporcione alguna de estas 
 * entradas, existen servidores que pueden omitir algunas o proporcionar otras no recogidas aquí. 
 * Un gran número de estas variables se encuentran recogidas en » especificación CGI 1.1, 
 * así que al menos debe esperar encontrar estas entradas.
 */
//Example: 
echo $_SERVER['SERVER_NAME'];
/*
 * Un array asociativo que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE.
 */
switch($_SERVER['REQUEST_METHOD'])
{
case 'GET': $the_request = &$_GET; break;
case 'POST': $the_request = &$_POST; break;

// Etc.

default:
}
/*
 * Un array asociativo de variables pasadas al script actual a través del método POST de HTTP 
 * cuando se emplea application/x-www-form-urlencoded o multipart/form-data como Content-Type de HTTP en la petición.
 */
echo '¡Hola ' . htmlspecialchars($_POST["nombre"]) . '!';
/*
 * Un array asociativo de variables pasado al script actual vía parámetros URL.

$HTTP_GET_VARS contiene la misma información, pero no es una superglobal. 
 * (Note que $HTTP_GET_VARS y $_GET son diferentes variables y que PHP los usa de forma diferente)
 */
echo 'Hola ' . htmlspecialchars($_GET["nombre"]) . '!';
/*
 * Una variable tipo array asociativo de variables pasadas al script actual a través de Cookies HTTP.


 */
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
