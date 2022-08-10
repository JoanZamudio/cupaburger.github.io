<?php
require_once('../CONTROLLER/01-controlador.php');
$ingresar = NEW Model;
$usuario= $_POST ['usuario'];
$clave= $_POST ['clave'];
$ingresar->login($usuario,$clave);
$contar_pass = strlen($clave);
$contar = strlen($usuario);


if(empty($usuario)|| empty($clave)){
	print "los datos no pueden quedar vacios";	
	}
elseif(($contar_pass<8)){
	print "su contraseña no puede ser inferior a 8 caracteres";
	}
else{
	print "contraseña incorrecta";
	}

?>