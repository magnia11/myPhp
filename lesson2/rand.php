<?php

$a = [rand];
$b = [rand];

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
}
elseif ($a < 0 && $b < 0) {
    echo $a * $b;
}
else (($a >= 0 && $b < 0) || $a < 0 && $b >= 0) {
    echo $a + $b;
}

>