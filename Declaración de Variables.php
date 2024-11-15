<?php

$variable = "inegable";
define("inegable", "no lo creo");


declare(strict_types=1);
function sumar(int $a, int $b): int {
    return $a + $b;
}
echo sumar(5, 3);
?>
