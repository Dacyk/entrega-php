<?php
class Config {
    const MAX_USUARIOS = 100;
}

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});
?>
