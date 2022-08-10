<?php 

require_once('../MODEL/conexion.php'); 
class Model{
private $db;
public function __Construct(){
$this->db = NEW conexion;
}
public function login($usuario,$clave){
try{
$sqlconsultar="SELECT * FROM usuario WHERE correoUsuario='$usuario' AND passwordUsuario='$clave'";
$resultado = $this->db->conectarse()->query($sqlconsultar)->fetch();
if ($resultado){
session_start();
$_SESSION['idActivo']= $resultado ['idUsuario'];
$_SESSION['usuarioactivo']= $resultado ['nombreUsuario'];

$rol=$resultado['idRolUsuario'];

if ($rol==1){
	header("location:../VIEW/04-Perfil_admin.php");
}
elseif ($rol==2){
	header("location:../VIEW/#");
}
elseif ($rol==3){
	header("location:../VIEW/#");
}
else{

}
}			
}
catch(PDOexception $men){
var_dump($men->getMessage());
}
}
public function micuenta($id){
    $sqlconsultar="SELECT * FROM usuario WHERE idUsuario='$id'";
    return $this->db->conectarse()->query($sqlconsultar)->fetchall();

 }

 public function modificarUsuario($direccion, $telefono, $clave, $correo){
	session_start();
	$id = $_SESSION['idActivo'];
	try{
		$sql="UPDATE usuario SET correoUsuario='$correo',passwordUsuario='$clave',direccionUsuario='$direccion',telefonoUsuario='$telefono'
		where idUsuario = '$id'";
		
		$this->db->conectarse()-> prepare($sql)->execute();

		return header("location:../VIEW/04(2)-Actualizar_mi_perfil_admin.php");
		}
		
		catch(PDOexception $men){
		
		var_dump($men->getMessage());
		
		}
 }
 public function listarUsuarios(){
try{

$listar = $this->db->conectarse()-> prepare("CALL ListarUsua()");
$listar->execute();

return $listar;

}

catch(PDOexception $men){

var_dump($men->getMessage());

}

}
public function modificarUsuarios($direccion, $telefono, $clave, $correo){
	session_start();
	$id = $_SESSION['idActivo'];
	try{
		$sql="UPDATE usuario SET correoUsuario='$correo',passwordUsuario='$clave',direccionUsuario='$direccion',telefonoUsuario='$telefono'
		where idUsuario = '$id'";
		
		$this->db->conectarse()-> prepare($sql)->execute();

		return header("location:../VIEW/04(2)-Actualizar_mi_perfil_admin.php");
		}
		
		catch(PDOexception $men){
		
		var_dump($men->getMessage());
		
		}
 }

}
?>