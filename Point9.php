<?php
//addcslashes($str, $charlist);
//Definition 

//*The addcslashes() function returns a string with backslashes 
//in front of the specified characters.*/

//Syntax
addcslashes(string,characters);
//Example
$str = "Welcome to my work!";
echo $str."<br>";
echo addcslashes($str,'A..Z')."<br>";
echo addcslashes($str,'a..z')."<br>";
echo addcslashes($str,'a..g');

//function addslashes($str)
/*The addslashes() function returns a string with backslashes in front of predefined characters.

The predefined characters are:

single quote (')
double quote (")
backslash (\)
NULL*/
//Syntax
addslashes($str);
 //Example
$stri = "Who's Peter Griffin?";
echo $stri . " This is not safe in a database query.<br>";
echo addslashes($stri) . " This is safe in a database query.";



?>;



