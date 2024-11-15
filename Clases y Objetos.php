<?php
class Persona {
    public $nombre_completo;
    private $edad_actual;

    public function __construct($nombre, $edad) {
        $this->nombre_completo = $nombre;
        $this->edad_actual = $edad;
    }

    public function obtenerSaludo() {
        return "Hola, soy " . $this->nombre_completo;
    }
}

$persona1 = new Persona("Carlos Pérez", 25);
echo $persona1->obtenerSaludo();
?>
