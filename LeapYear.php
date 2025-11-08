
<!-- Leap Year Check
Write a program that checks if a given year (e.g., $year = 2024;) is a leap year or not. -->

<?php
$year = 2024;
if ($year % 4 == 0 && $year % 100 !== 0 || $year % 400 == 0)
{
    echo "The year is a leap year."; }

else
    {echo " The year is not a leap year."; }

?>