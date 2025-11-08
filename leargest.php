<?php
$a = 10000000;
$b = 20000;
$c = 910;

if ($a > $b) {
    if ($a > $c) {
        echo " $a is the leargest.";
    } else {
        echo " $c is the leargest.";
    }
} else if ($b > $c) {
    if ($b > $a) {
        echo " $b is the leargest.";
    } else {
        echo " $a is the leargest.";
    }
} else {
    echo " $c is the leargest.";
}

?>