<?php
abstract class Empleado {
    abstract protected function calcularSalario();
}

interface Enviable {
    public function enviarCorreo();
}

class EmpleadoPermanente extends Empleado implements Enviable {
    public function calcularSalario() {
        // Implementación
    }

    public function enviarCorreo() {
        // Implementación
    }
}
?>
