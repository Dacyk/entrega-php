<?php
$puntuacion = 85;

if ($puntuacion > 90) {
    echo "Excelente";
} elseif ($puntuacion >= 75) {
    echo "Aprobado";
} else {
    echo "Necesita mejorar";
}

echo ($puntuacion >= 75) ? "Aprobado" : "Reprobado";

$resultado_evaluacion = $puntuacion ?? "No hay puntuación";

$comparacion_valor = 5 <=> 10; // Devuelve -1 porque 5 es menor que 10
?>
