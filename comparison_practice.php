<!-- Create a new PHP file named comparison_practice.php

Write a PHP script that:

Declares three variables:

$a = 10;
$b = "10";
$c = 10;
$d = 1;
$e =2;
$f =3;


Use different comparison operators (==, ===, !=, !==, <, >, <=, >=, <=>) to compare these variables.

For each comparison, echo all the answers. like $a == $b : True -->

<?php 
$a = 10;                 
$b = "10"; 
$c = 10;
$d = 10;
$e =2;
$f =3;
echo var_dump($a == $b);// why the ouput is [bool (true)}] ? because the value is same and the DATA TYPE IS NOT CHECKED. it will be false if the value is different. e.g $a=10; $b="100000"; then the output will be false
echo "<br>"; // this is for line break; THE ECHO "\N" WILL NOT PRINT A NEW LINE IN HTML
echo var_dump($a === $b); // tHE DATA TYPE IS CHECKED HERE.SO THE BOTH SIDE MUST BE THE SAME TYPE and same thing. e.g. $a=26, $b=26;the ouput is [bool (false)}] 
echo "<br>";
echo var_dump($a != $c); // if a is not eqal to c then the output is true. So the answer     is false because both are same
echo "<br>";
echo var_dump($a !== $b); // the data type is not same so the output is true; becase of the PHP updated version it masures strictly.however the actual theory is to be checked the value first then the data type.and the datatype is ignored.
echo "<br>";
echo var_dump($a !== $c); // the ans is false because both are same type and same value 
echo "<br>";
echo var_dump($a < $b); // the ans is false because both are same value
echo "<br>";
echo var_dump($a > $b); // the ans is false because both are same value
echo "<br>";
echo var_dump($a <= $b); // the ans is true because both are same value
echo "<br>";
echo var_dump($a >= $b); // the ans is true because both are same value
echo "<br>";
echo var_dump($d <=> $e); // the <=> spaceship operator. if the left is Bigger then the Right OUTPUT IS = 1; because BORO(left) shoman SUTO (left); [BORO=1]
echo "<br>";
echo var_dump($c <=> $d);// Shoman ; the outrput is 0.
echo "<br>";
echo var_dump($e <=> $f) // SUTO (left); the output is -1 ;



?>
