<?php
function saludarUsuario($nombre_usuario = "Usuario"): string {
    return "Hola, " . $nombre_usuario;
}

function incrementarValorPorReferencia(int &$cantidad) {
    $cantidad += 5;
}

echo saludarUsuario("Carlos");
$valor_inicial = 10;
incrementarValorPorReferencia($valor_inicial);
echo $valor_inicial; // Salida: 15
?>
