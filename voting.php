<?php
$age  =20;
if ($age >=18):
    echo " You are eligible for voting.";
    echo ("As you are \n" .$age."\n years old."); // you need to use "." to concatenating the age variable
else :
    echo " You're not eligible for voting!";
endif;

?>