<?php
class ConexionBaseDatos {
    public function __construct() {
        echo "Conectando a la base de datos...";
    }

    public function __destruct() {
        echo "Cerrando la conexión de la base de datos";
    }
}

$conexion = new ConexionBaseDatos();
?>
