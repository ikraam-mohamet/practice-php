<?php

$num1 = 8;
$num2 = 12;
$max = ($num1 > $num2) ? $num1 : $num2;

while (true) {
    if ($max % $num1 == 0 && $max % $num2 == 0) {
        echo "LCM = " . $max;
        break;
    }
    $max++;
}

?>