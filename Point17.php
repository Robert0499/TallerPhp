<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    //Operadores de aritmética
    //sum
    $sum1 = 10;
    $sum2 = 6;
    echo $sum1 + $sum2;
    //Substraction
    $sub1 = 10;
    $sub2 = 6;
    echo $sub1 - $sub2;
    //Multiplication
    $mult1 = 5;
    $mult2 = 3;
    echo $mult1 * $mult2;
    //Division
    $div1 = 10;
    $div2 = 2;
    echo $div1 / $div2;
    //Modulus
    $mod1 = 10;
    $mod2 = 6;
    echo $mod1 % $mod2;
    //Exponentiation
    $exp1 = 10;
    $exp2 = 2;
    echo $exp1 ** $exp2;

    //operadores de asignación 
    $a = 20;
    $a += 100;
    echo $a;

    //operadores de comparación
    $num1 = 100;
    $num2 = "100";
    var_dump($num1 == $num2); // returns true because values are equal

    $num3 = 100;
    $num4 = "100";

    var_dump($num3 === $num4); // returns false because types are not equal

    $num5 = 100;
    $num6 = "100";

    var_dump($num5 != $num6); // returns false because values are equal

    $num7 = 100;
    $num8 = "100";

    var_dump($num7 <> $num8); // returns false because values are equal

    $num9 = 100;
    $num10 = "100";

    var_dump($num9 !== $num10); // returns true because types are not equal

    $num11 = 100;
    $num12 = 50;

    var_dump($num11 > $num12); // returns true because $num11 is greater than $num12

    $num13 = 10;
    $num14 = 50;

    var_dump($num13 < $num14); // returns true because $num13 is less than $num14

    $num15 = 50;
    $num16 = 50;

    var_dump($num15 >= $num16); // returns true because $num15 is greater than or equal to $num16

    $num17 = 50;
    $num18 = 50;

    var_dump($num17 <= $num18); // returns true because $num17 is less than or equal to $num18
    //Operadores de incremento / disminución
    $num19 = 10;
    echo ++$num19;

    $num20 = 10;
    echo $num20++;

    $num21 = 10;
    echo --$num21;

    $num22 = 10;
    echo $num22--;

    //Operadores lógicos
    $arg1 = 100;
    $arg2 = 50;
    if ($arg1 == 100 and $arg2 == 50) {
      echo "Hello world!";
    }

    $arg3 = 100;
    $arg4 = 50;
    if ($arg3 == 100 or $arg4 == 80) {
      echo "Hello world!";
    }

    $arg5 = 100;
    $arg6 = 50;
    if ($arg5 == 100 xor $arg6 == 80) {
      echo "Hello world!";
    }

    $arg7 = 100;
    $arg8 = 50;
    if ($arg7 == 100 && $arg8 == 50) {
      echo "Hello world!";
    }

    $arg9 = 100;
    $arg10 = 50;
    if ($arg9 == 100 || $arg10 == 80) {
      echo "Hello world!";
    }

    $arg11 = 100;
    if ($arg11 !== 90) {
      echo "Hello world!";
    }

    //Operadores de cadena
    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2;

    $txt3 = "Hello";
    $txt4 = " world!";
    $txt3 .= $txt4;
    echo $txt3;

    //Operadores de matriz
    $ary1 = array("a" => "red", "b" => "green");
    $ary2 = array("c" => "blue", "d" => "yellow");
    echo ($ary1 + $ary2); // union of $ary1 and $ary2

    $ary3 = array("a" => "red", "b" => "green");
    $ary4 = array("c" => "blue", "d" => "yellow");
    var_dump($ary3 == $ary4);

    $ary5 = array("a" => "red", "b" => "green");
    $ary6 = array("c" => "blue", "d" => "yellow");
    var_dump($ary5 === $ary6);

    $ary7 = array("a" => "red", "b" => "green");
    $ary8 = array("c" => "blue", "d" => "yellow");
    var_dump($ary7 != $ary8);

    $ary9 = array("a" => "red", "b" => "green");
    $ary10 = array("c" => "blue", "d" => "yellow");
    var_dump($ary9 <> $ary10);

    $ary11 = array("a" => "red", "b" => "green");
    $ary12 = array("c" => "blue", "d" => "yellow");
    var_dump($ary11 !== $ary12);
    ?>
  </body>
</html>


