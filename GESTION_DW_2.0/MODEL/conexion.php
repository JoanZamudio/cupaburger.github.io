<?php
class conexion {
	public function conectarse(){
$dsn="mysql:host=localhost;dbname=domicilios_web;port=3307;charset=utf8";
$usuario="root";
$clave="";
return new PDO($dsn,$usuario,$clave);
}
}
?>	