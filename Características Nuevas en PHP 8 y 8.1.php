<?php

$opcion_menu = 2;
echo match($opcion_menu) {
    1 => "Inicio",
    2 => "Perfil",
    default => "Salir"
};

// PHP 8.1 Enums
enum EstadoPedido {
    case PENDIENTE;
    case COMPLETADO;
    case CANCELADO;
}

$estado_actual = EstadoPedido::COMPLETADO;
?>
