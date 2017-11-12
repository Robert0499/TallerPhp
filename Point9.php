<?php
//addcslashes($str, $charlist);
//Definition 
//La función addcslashes () devuelve una cadena con barras invertidas 
// delante de los caracteres especificados.*/
//Syntax
addcslashes(string, characters);
//Example
$str = "Welcome to my work!";
echo $str . "<br>";
echo addcslashes($str, 'A..Z') . "<br>";
echo addcslashes($str, 'a..z') . "<br>";
echo addcslashes($str, 'a..g');

//function addslashes($str)
/* La función addlashes () devuelve una cadena con barras invertidas delante de los caracteres predefinidos.

  Los caracteres predefinidos son:

  single quote (')
  double quote (")
  backslash (\)
  NULL */

//Syntax
addslashes($str);
//Example
$stri = "Who's Peter Griffin?";
echo $stri . " This is not safe in a database query.<br>";
echo addslashes($stri) . " This is safe in a database query.";

//bin2hex() Function:
//Definition and Usage
/*
  La función bin2hex () convierte una cadena de caracteres ASCII a valores hexadecimales.
 La cadena se puede volver a convertir utilizando la función pack ().
 */

//Syntax: 
bin2hex($string);
//Example
//Convierte un valor de cadena de texto de binario a hexadecimal y viceversa:
$string = "Hello world!";
echo bin2hex($string) . "<br>";
echo pack("H*", bin2hex($string)) . "<br>";

//chop() Function:
//Definition and Usage: 

/*
  La función chop () elimina espacios en blanco u otros caracteres predefinidos de la ventana de diálogo
 el extremo derecho de una cuerda.
 */
//Syntax: 
chop(string, charlist);
//Example:
//
//Eliminar nuevas líneas (\n) del extremo derecho de una cadena: ng.

$stric = "Hello World!\n\n";
echo $stric;
echo chop($stric);

//chr() Function:
//Definition and Usage:

/*
  La función chr () devuelve un carácter del valor ASCII especificado.

  El valor ASCII se puede especificar en valores decimales, octales o hexadecimales.
 Los valores octales se definen con un valor 0, mientras que los valores hexadecimales se definen con un valor 0x.
 */

//Syntax: 
chr($ascii);
//Example:
$ascii = chr(046);
echo("You $ascii me forever!");

//chunk_split() Function:
//Definition and Usage:
/*
 * La función chunk_split () divide una cadena en una serie de partes más pequeñas.
 */

//Syntax: 
chunk_split(string, length, end);
//Example:
//Divida la cadena después de cada sexto carácter y añada un "..." después de cada división:
$str = "Hello world!";
echo chunk_split($str, 6, "...");

//convert_cyr_string() Function:
//Definition and Usage:
/*
  La función convertir_cyr_string () convierte una cadena de caracteres de un juego de caracteres cirílico a otro.

  Los juegos de caracteres cirílicos compatibles son:
  k - koi8-r
  w - windows-1251
  i - iso8859-5
  a - x-cp866
  d - x-cp866
  m - x-mac-cyrillic
 */
//Syntax:
//convert_cyr_string(string,from,to)
//Example: 

$str = "Hello world! ���";
echo $str . "<br>";
echo convert_cyr_string($str, 'w', 'a');

//convert_uudecode() Function:
//Definition and usage:

/*
La función Convertir_uudecode () decodifica una cadena de caracteres uuencoded.
  Esta función se utiliza a menudo junto con la función Convertir_uuencode ().
 */
//Syntax:
convert_uudecode($data);
//Example:
$data = "Hello world!";
// Encode the string
$encodeString = convert_uuencode($str);
echo $encodeString . "<br>";

// Decode the string
$decodeString = convert_uudecode($encodeString);
echo $decodeString;

//convert_uuencode() Function
//Definition and usage:
/*
 * La función convertir_uuencode () codifica una cadena utilizando el algoritmo uuencode.
 */
//Syntax:
convert_uuencode($eje);
//Example:
$eje = "Hello world!";
// Encode the string
$encodeString = convert_uuencode($eje);
echo $encodeString . "<br>";

// Decode the string
$decodeString = convert_uudecode($encodeString);
echo $decodeString;

//count_chars() Function
//Definiiton and Usage:
/*
 * La función count_chars () devuelve información sobre los caracteres utilizados en una cadena 
 (por ejemplo, cuántas veces se produce un carácter ASCII en una cadena, 
 o qué caracteres se han utilizado o no en una cadena).
 */
//Syntax: 
count_chars(string, mode);
//Example:
$str = "Hello World!";
echo count_chars($str, 3);

//crc32() Function
//Definition and Usage:
/*
 * La función crc32 () calcula un CRC de 32 bits (suma de comprobación de redundancia cíclica) para una cadena.
  Esta función se puede utilizar para validar la integridad de los datos
 */
//Syntax: 
crc32($str);
//Example
$str = crc32("Hello world!");
echo 'Without %u: ' . $str . "<br>";
echo 'With %u: ';
printf("%u", $str);

//crypt() Function
//Definition and Usage: 
/*
 * La función crypt () devuelve una cadena hashed usando algoritmos DES, Blowfish o MD5.
  Esta función se comporta de forma diferente en diferentes sistemas operativos.
 PHP comprueba qué algoritmos están disponibles y qué algoritmos usar cuando 
 está instalado.
 */
//Syntax: 
crypt(str, salt);
// 2 character salt
if (CRYPT_STD_DES == 1) {
    echo "Standard DES: " . crypt('something', 'st') . "\n<br>";
} else {
    echo "Standard DES not supported.\n<br>";
}

// 4 character salt
if (CRYPT_EXT_DES == 1) {
    echo "Extended DES: " . crypt('something', '_S4..some') . "\n<br>";
} else {
    echo "Extended DES not supported.\n<br>";
}

// 12 character salt starting with $1$ 
if (CRYPT_MD5 == 1) {
    echo "MD5: " . crypt('something', '$1$somethin$') . "\n<br>";
} else {
    echo "MD5 not supported.\n<br>";
}

// Salt starting with $2a$. The two digit cost parameter: 09. 22 characters 
if (CRYPT_BLOWFISH == 1) {
    echo "Blowfish: " . crypt('something', '$2a$09$anexamplestringforsalt$') . "\n<br>";
} else {
    echo "Blowfish DES not supported.\n<br>";
}

// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA256 == 1) {
    echo "SHA-256: " . crypt('something', '$5$rounds=5000$anexamplestringforsalt$') . "\n<br>";
} else {
    echo "SHA-256 not supported.\n<br>";
}

// 16 character salt starting with $6$. The default number of rounds is 5000.
if (CRYPT_SHA512 == 1) {
    echo "SHA-512: " . crypt('something', '$6$rounds=5000$anexamplestringforsalt$');
} else {
    echo "SHA-512 not supported.";
}
//echo function:
//Definition and Usage
/*
 * la función echo () emite una o más cadenas.

 */
//Syntax:
echo(strings);
//Example: 
$str = "Hello world!";
echo $str;
//explode() Function
//Definition and usage:

 /* La función explode () rompe una cadena en un array.

  Nota: El parámetro "separador" no puede ser una cadena vacía.

  Nota: Esta función es binaria.
 */
//Syntax
explode(separator,string,limit);
//Example:
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
//


?>;



