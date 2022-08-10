<?php
require_once('../CONTROLLER/01-controlador.php');

$modificar = NEW Model;
$direccion = $_POST ['direccionUsuario'];
$telefono = $_POST ['telefonoUsuario'];
$correo = $_POST ['correoUsuario'];
$clave = $_POST ['passwordUsuario'];
$modificar->modificarUsuario($direccion, $telefono, $clave, $correo);

?>

    