<?php
try {
    throw new Exception("Se ha producido un error esperado");
} catch (Exception $excepcion) {
    echo $excepcion->getMessage();
}
?>
