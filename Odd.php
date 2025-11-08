
<!-- 2.Print Odd Numbers from 2 to 26-->


<?php

$num = 1;

for ($num; $num <= 26;) {
    if ($num % 2 !== 0) {
        echo "$num";

        echo '<br>';
    }
    $num++;
}

?>

