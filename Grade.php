<?php
$marks = 100;

switch ($marks)
{
case $marks< 33:
    echo "F";
    break;
case $marks>=40 && $marks <=49 :
    echo "C";
    break;
case $marks >= 33 && $marks <= 39 :
    echo "D";
    break;
case $marks>= 70 && $marks<= 79 :
    echo "A"; 
default : 
echo "Grade not in listed";

}


?>