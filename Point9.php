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

//Function fprintf():
//Definition and usage
/*
 * La función fprintf () escribe una cadena formateada en un flujo de salida especificado
 *  (ejemplo: archivo o base de datos).

Los parámetros arg1, arg2, ++ se insertarán en los signos de porcentaje (%) en la cadena principal. 
 * Esta función funciona "paso a paso". En el primer signo % se inserta arg1, en el segundo signo % se inserta arg2, etc.
 */
//Example: 
$number = 123;
$file = fopen("test.txt","w");
fprintf($file,"%f",$number);

//get_html_translation_table() Function
//Definition and usage: 
/*
 * La función get_html_translation_table () devuelve la tabla de traducción 
 * utilizada por las funciones htmlentities () y htmlspecialchars ().

Sugerencia: Algunos caracteres pueden ser codificados de varias maneras. 
 * La función get_html_translation_table () devuelve la codificación más común.

 */

//Example: 
print_r (get_html_translation_table(HTML_SPECIALCHARS));

Array

(
  ["] => &quot;
  [&] => &amp;
  [<] => &lt;
  [>] => &gt;
  ["]
);

//hebrev() Function
//Definition and usage: 
/*
 * La función hebrev () convierte el texto hebreo de un flujo 
 * de derecha a izquierda a un flujo de izquierda a derecha.
 */
//Example: 
hebrev(string,maxcharline);
echo hebrev("� ���� �����");

//hebrevc() function:
//Definition and usage: 
/*
 * La función hebrevc () convierte el texto hebreo de un flujo de derecha a izquierda
 *  a un flujo de izquierda a derecha. También convierte nuevas líneas (\n) en <br>.
 */
//Example: 
hebrevc(string,maxcharline);              

//Function hex2bin();
//Definition and usage: 
/*
 * La función hex2bin () convierte una cadena de valores hexadecimales a caracteres ASCII.
 */

//Example: 
$string = 'Hello wordl';
hex2bin($string);

//Function html:entity_decode()
//Definition and usage: 
/*
 * La función html_entity_decode () convierte entidades HTML a caracteres.
La función html_entity_decode () es opuesta a html_entity_decode ().
 */

//Example: 
html_entity_decode(string,flags,character-set);


//Function htmllentities();
//Definition and usage: 
/*
 * La función htmlentities () convierte caracteres a entidades HTML.
Sugerencia: Para convertir entidades HTML de nuevo a caracteres, utilice la función html_entity_decode ().
Sugerencia: Utilice la función get_html_translation_table () para devolver la tabla de traducción utilizada por las htmlentities ().

 */
//Example: 
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);

//function htmlspecialchars_decode();
//Definition and usage: 
/*
 * La función htmlspecialchars_decode () convierte algunas entidades HTML predefinidas en caracteres.
Las entidades HTML que serán decodificadas son:

se convierte en &amp; (ampersand)
&quot; se convierte en " (doble cita)
&#039; se convierte' (cita única)
se convierte en < (menos que)
se convierte en > (mayor que)
 */
$str = "Jane &amp; &#039;Tarzan&#039;";
echo htmlspecialchars_decode($str, ENT_COMPAT); // Will only convert double quotes
echo "<br>";
echo htmlspecialchars_decode($str, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo htmlspecialchars_decode($str, ENT_NOQUOTES); // Does not convert any quotes


//function htmlspecialchars();

//Definition and usage: 
/*
 * La función htmlspecialchars () convierte algunos caracteres predefinidos a entidades HTML.
Los caracteres predefinidos son:
 * & (ampersand) becomes &amp;
" (double quote) becomes &quot;
' (single quote) becomes &#039;
< (less than) becomes &lt;
> (greater than) becomes &gt;
 */
//Example: 
$str = "Jane & 'Tarzan'";
echo htmlspecialchars($str, ENT_COMPAT); // Will only convert double quotes
echo "<br>";
echo htmlspecialchars($str, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo htmlspecialchars($str, ENT_NOQUOTES); // Does not convert any quotes


//Function implode();
//Definition and usage: 
/*
 * La función implode () devuelve una cadena de los elementos de un array.

Nota: La función implode () acepta sus parámetros en cualquier orden. 
 * Sin embargo, para mantener la consistencia con el desglose (), 
 * debe utilizar el orden documentado de los argumentos.
 */
//Example: 
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>"; 
echo implode("X",$arr);


//Function join();
//Definition and usage: 
/*
 * La función join () devuelve una cadena de los elementos de un array.

La función join () es un alias de la función implode ().
 */
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
echo join("+",$arr)."<br>";
echo join("-",$arr)."<br>"; 
echo join("X",$arr);

//Function Icfirst();
//Definition and usage: 
/*
 * La función lcfirst () convierte el primer carácter de una cadena a minúscula.

Funciones relacionadas:

ucfirst () - convierte el primer carácter de una cadena en mayúsculas
ucwords () - convierte el primer carácter de cada palabra en una cadena a mayúscula
strtoupper () - convierte una cadena a mayúscula
strtolower () - convierte una cadena a minúscula

 */
//Example: 
echo lcfirst("Hello world!");

//function levenshtein ();
//Definition and usage: 
/*
 * La función levenshtein () devuelve la distancia de Levenshtein entre dos cadenas.
La distancia de Levenshtein es el número de caracteres que debe reemplazar, 
 * insertar o borrar para transformar la cadena1 en cadena2.
 */
//Example: 
echo levenshtein("Hello World","ello World");
echo "<br>";
echo levenshtein("Hello World","ello World",10,20,30);

//function 
//Definition and usage: 
/*
 * The localeconv() function returns an array containing local numeric and monetary formatting information.
 */
//Example: 
setlocale(LC_ALL,"US");
$locale_info = localeconv();
print_r($locale_info);

//function Itrim()
//Definition and usage: 
/*
 * La función ltrim () elimina espacios en blanco u otros caracteres predefinidos del lado izquierdo de una cadena.
Funciones relacionadas:
rtrim () - Elimina espacios en blanco u otros caracteres predefinidos del lado derecho de una cadena
trim () - Elimina espacios en blanco u otros caracteres predefinidos de ambos lados de una cadena
 */
//Example: 
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");

//Function md5();
//Definition and usage: 
/*
 * La función md5 () calcula el hash MD5 de una cadena.
La función md5 () utiliza el algoritmo RSA Data Security, Inc. MD5 Message-Digest Algoritmo.
 */
//Example: 
$str = "Hello"; 
echo "The string: ".$str."<br>"; 
echo "TRUE - Raw 16 character binary format: ".md5($str, TRUE)."<br>"; 
echo "FALSE - 32 character hex number: ".md5($str)."<br>"; 

//function md5_file()
//Definition and usage: 
/*
 * La función md5_file () calcula el hash MD5 de un archivo.
La función md5_file () utiliza el algoritmo RSA Data Security, Inc. MD5 Message-Digest Algoritmo.
 */
//Example: 
$filename = "test.txt";
$md5file = md5_file($filename);
echo $md5file;

//Function metaphone()
//Definition and usage:
/*
 * La función metaphone () calcula la tecla de un metaphone de una cadena.
Una tecla de un metaphone representa cómo suena una cuerda si es dicha por una persona de habla inglesa.
La función metaphone () se puede utilizar para aplicaciones de ortografía.
 */
//Example: 
$str = "Assistance";
$str2 = "Assistants";

echo metaphone($str);
echo "<br>";
echo metaphone($str2);

//Function money_format ()
//Definition and usage:
/*
 * La función money_format () devuelve una cadena formateada como cadena de moneda.
Esta función inserta un número formateado donde hay un signo de porcentaje (%) en la cadena principal.
 */
//Example: 
$number = 1234.56;
setlocale(LC_MONETARY,"de_DE");
echo money_format("%.2n", $number);

//Function nl_langinfo ()
//Definition and usage: 
/*
 * La función nl_langinfo () devuelve información local específica.
Nota: Esta función no funciona en plataformas Windows.
 */

//Example: 
nl_langinfo(element);
 
//Function nl2br () 
//Definition and usage: 
/*
 * La función nl2br () inserta saltos de línea HTML (<br> o <br />) delante de cada línea nueva (\n) en una cadena.
 */

//Example: 
echo nl2br("One line.\nAnother line.");
//Function number_format ()
//Definition and usage: 
/*
 * La función number_format () formatea un número con miles agrupados.
Nota: Esta función soporta uno, dos o cuatro parámetros (no tres).
 */

//Example: 
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");
//Function ord();
//Definition and usage: 
/*
 * La función ord () devuelve el valor ASCII del primer carácter de una cadena.
 */

//Example: 
echo ord("h")."<br>";
echo ord("hello")."<br>";
//Function parse_str ()
//Definition and usage: 
/*
 * La función parse_str () analiza una cadena de consulta en variables.
Nota: Si el parámetro array no está configurado, 
 * las variables configuradas por esta función sobreescribirán las variables existentes del mismo nombre.
 */

//Example:
parse_str("name=Peter&age=43");
echo $name."<br>";
echo $age;

//Function print();
//Definition and usage: 
/*
 * La función print () emite una o más cadenas.
Nota: La función print () no es realmente una función, por lo que no es necesario utilizar paréntesis con ella.
 */

//Example: 
$str = "Hello My name is Robert!!";
print $str;
 //Function 
//Definition and usage 
/*
 * La función printf () emite una cadena formateada.
Los parámetros arg1, arg2, ++ se insertarán en los signos de porcentaje (%) en la cadena principal. 
 * Esta función funciona "paso a paso". En el primer signo % se inserta arg1, en el segundo signo % se inserta arg2, etc.
 */
//Example: 
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);

//Function quoted_printable_decode ()
//Definition and usage: 
/*
 * La función quoted_printable_decode () decodifica una cadena de texto imprimible a una cadena ASCII de 8 bits.
 */
//Example: 
$str = "Hello=0Aworld.";
echo quoted_printable_decode($str);

//Function quoted_printable_encode();
//Definition and usage: 
/*
 * La función quoted_printable_encode () convierte una cadena de 8 bits en una cadena de texto para la impresión de comillas.
 */
//Example: 
$string = "Hello";
echo quoted_printable_encode($string);

//Function
//Definition and usage: 
/*
 * La función quotemeta () añade barras invertidas delante de algunos caracteres predefinidos en una cadena.
 */

//Example: 
$str1 = "1 + 1 = 2";
$str2 = "1 * 1 = 1";
$str3 = "Could you borrow me 5$?";
echo quotemeta($str1)."<br>";
echo quotemeta($str2)."<br>";
echo quotemeta($str3)."<br>";
//Function
//Definition and usage: 
/*
 * La función rtrim () elimina espacios en blanco u otros caracteres predefinidos del lado derecho de una cadena.
 */
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");

 /*
  * La función setlocale () establece la información locale.
La información de localización es información lingüística, monetaria, horaria y de otro tipo específica para una zona geográfica.
  */
echo setlocale(LC_ALL,"US");
echo "<br>";
echo setlocale(LC_ALL,NULL);

//La función sha1 () calcula el hash SHA-1 de una cadena.
//La función sha1 () utiliza el algoritmo US Secure Hash Algorithm 1.

$str = "Hello";
echo sha1($str);

//La función sha1_file () calcula el hash SHA-1 de un fichero.
//La función sha1_file () utiliza el algoritmo US Secure Hash Algorithm 1..
$filename = "test.txt";
$sha1file = sha1_file($filename);
echo $sha1file;
//La función similar_text () calcula la similitud entre dos cadenas.
//También puede calcular la similitud de las dos cadenas en porcentaje.
echo similar_text("Hello World","Hello Peter");

//La función soundex () calcula la clave soundex de una cadena.
//Una clave soundex es una cadena alfanumérica de cuatro caracteres que representa la pronunciación en inglés de una palabra.
$str = "Hello";
echo soundex($str);

//La función sprintf () escribe una cadena formateada en una variable.
//Los parámetros arg1, arg2, ++ se insertarán en los signos de porcentaje (%) en la cadena principal. 
//Esta función funciona "paso a paso". En el primer signo % se inserta arg1, en el segundo signo % se inserta arg2, etc.
$number = 123;
$txt = sprintf("%f",$number);
echo $txt;

//La función sscanf () analiza la entrada de una cadena según un formato especificado. 
//La función sscanf () analiza una cadena de caracteres en variables basadas en la cadena de formato.
$str = "age:30 weight:60kg";
sscanf($str,"age:%d weight:%dkg",$age,$weight);
// show types and values
var_dump($age,$weight);

//La función str_getcsv () analiza una cadena para campos en formato CSV y devuelve una matriz que contiene los campos leídos.
str_getcsv($string,separator,enclosure,escape);

//La función str_ireplace () reemplaza algunos caracteres por otros en una cadena.
//Esta función funciona según las siguientes reglas:
$arr = array("blue","red","green","yellow");
print_r(str_ireplace("RED","pink",$arr,$i)); // This function is case-insensitive
echo "Replacements: $i";
//La función str_pad () pasa una cadena a una nueva longitud.
str_pad($string,length,pad_string,pad_type);
//La función str_repeat () repite una cadena un número especificado de veces.
echo str_repeat(".",13);
//La función str_replace () reemplaza algunos caracteres por otros en una cadena.
echo str_replace("world","Peter","Hello world!");
//La función str_rot13 () realiza la codificación ROT13 en una cadena.
echo str_rot13("Hello World");
echo "<br>";
echo str_rot13("Uryyb Jbeyq");
//La función str_shuffle () baraja aleatoriamente todos los caracteres de una cadena.
echo str_shuffle("Hello World");
//La función str_split () divide una cadena en una matriz.
print_r(str_split("Hello"));
//La función str_word_count () cuenta el número de palabras en una cadena.
echo str_word_count("Hello world!");
//La función strcasecmp () compara dos cadenas.
echo strcasecmp("Hello world!","HELLO WORLD!");
//La función strchr () busca la primera aparición de una cadena dentro de otra cadena.
echo strchr("Hello world!","world");
//La función strcmp () compara dos cadenas
echo  strcmp("HEllo", "HELLO");
//La función strcoll () compara dos cadenas.
//La comparación de las cadenas puede variar dependiendo de la configuración local (A<a o A>a).
setlocale (LC_COLLATE, 'NL');
echo strcoll("Hello World!","Hello World!");
echo "<br>";

setlocale (LC_COLLATE, 'en_US');
echo strcoll("Hello World!","Hello World!");
/*
 * La función strcspn () devuelve el número de caracteres (incluyendo espacios en blanco) 
 * encontrados en una cadena antes de que se encuentre cualquier parte de los caracteres especificados.

 */
echo strcspn("Hello world!","w",0,6); // The start position is 0 and the length of the search string is 6.
//La función strip_tags () elimina una cadena de etiquetas HTML, XML y PHP.
echo strip_tags("Hello <b>world!</b>");
//La función stripcslashes () elimina las barras invertidas añadidas por la función addcslashes ().
echo stripcslashes("Hello \World!");
//La función stripslashes () elimina las barras invertidas añadidas por la función addlashes ().
echo stripslashes("Who\'s Peter Griffin?");
//La función stripos () encuentra la posición de la primera aparición de una cadena dentro de otra cadena.
echo stripos("I love php, I love php too!","PHP");
//La función stristr () busca la primera aparición de una cadena dentro de otra cadena.
echo stristr("Hello world!","WORLD");
//La función strlen () devuelve la longitud de una cadena.
echo strlen("Hello");
//La función strnatcasecmp () compara dos cadenas utilizando un algoritmo "natural".
echo strnatcasecmp("2Hello world!","10Hello WORLD!");
echo "<br>";
echo strnatcasecmp("10Hello world!","2Hello WORLD!");
//La función strnatcmp () compara dos cadenas utilizando un algoritmo "natural".
echo strnatcmp("2Hello world!","10Hello world!");
echo "<br>";
echo strnatcmp("10Hello world!","2Hello world!");
//The strncasecmp() function compares two strings.
echo strncasecmp("Hello world!","hello earth!",6);
//La función strncmp () compara dos cadenas.
echo strncmp("Hello world!","Hello earth!",6);
//La función strpbrk () busca en una cadena cualquiera de los caracteres especificados.
echo strpbrk("Hello world!","oe");
//La función strpos () encuentra la posición de la primera aparición de una cadena dentro de otra cadena.
echo strpos("I love php, I love php too!","php");
//La función strspn () devuelve el número de caracteres encontrados en la cadena que contiene sólo caracteres del parámetro charlist.
echo strspn("Hello world!","kHlleo");
//The strstr() function searches for the first occurrence of a string inside another string.
echo strstr("Hello world!","world");
//La función strtok () divide una cadena en cadenas más pequeñas (tokens).
$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
} 
//La función strtolower () convierte una cadena a minúscula.
echo strtolower("Hello WORLD.");
//La función strtoupper () convierte una cadena a mayúscula.
echo strtoupper("Hello WORLD!");
//La función strtr () traduce ciertos caracteres en una cadena.
echo strtr("Hilla Warld","ia","eo");
//La función substr () devuelve una parte de una cadena
echo substr("Hello world",6);
//La función substr_compare () compara dos cadenas desde una posición de inicio especificada.
echo substr_compare("Hello world","Hello world",0);
//La función substr_count () cuenta el número de veces que se produce una subsecuencia en una cadena.
echo substr_count("Hello world. The world is nice","world");
//La función substr_replace () reemplaza una parte de una cadena por otra.
echo substr_replace("Hello","world",0);
//The trim() function removes whitespace and other predefined characters from both sides of a string.
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
//La función ucfirst () convierte el primer carácter de una cadena a mayúscula.
echo ucfirst("hello world!");
//La función ucwords () convierte el primer carácter de cada palabra en una cadena a mayúscula.
echo ucwords("hello world");
//La función vfprintf () escribe una cadena formateada en un flujo de salida especificado (ejemplo: archivo o base de datos).
$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo vfprintf($file,"There are %u million bicycles in %s.",array($number,$str));
//La función vprintf () emite una cadena formateada.
$number = 9;
$str = "Beijing";
vprintf("There are %u million bicycles in %s.",array($number,$str));
//La función vsprintf () escribe una cadena formateada en una variable.
$number = 9;
$str = "Beijing";
$txt = vsprintf("There are %u million bicycles in %s.",array($number,$str));
echo $txt;
//La función wordwrap () envuelve una cadena en nuevas líneas cuando alcanza una longitud específica.
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");

?>
