<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SCRIPTS ICONOS -->
    <script src="https://kit.fontawesome.com/db59255a97.js" crossorigin="anonymous"></script>
    <!-- TIPOGRAFIA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../ASSETS/CSS/Main.css">
    <title>Cupa Burger | Ver Usuarios</title>
</head>
<!-- HEADER -->
<header>
        <a href="0-Index.html" class="logo"><i class="fa-solid fa-burger"></i>Cupa Burger</a>
        <div id="menu-bar" class="fas fa-bars"></div>
         <div id="header">
      <ul class="nav">
            <li><a href="../VIEW/04-Perfil_Admin.php">Inicio</a></li>
            <li><a href="#Cocina Real">Validacion</a></li>
            <li><a href="#Eventos">Usuarios</a>
            <ul>
                <li><a href="">Registrar</a></li>
                <li><a href="">Actualizar perfiles</a></li>
                <li><a href="../CONTROLLER/04-EliminarUsua.php">Darse de Baja</a></li>
                <li><a href="../CONTROLLER/03-ListarUsua.php">Consultar usuarios</a></li>
                <li><a href="">Actualizar usuarios</a></li>
                <li><a href="">Activar | Inactivar</a>
            </ul></li></li>
            <li><a href="#">Productos</a>
            <ul>
                <li><a href="">Registrar</a></li>
                <li><a href="">Consultar</a></li>
                <li><a href="">Actualizar</a></li>
                <li><a href="">Inactivar</a></li>
            </ul></li>
            <li><a href="#">Pedidos</a>
            <ul>
                <li><a href="">Registrar</a></li>
                <li><a href="">Consultar</a></li>
                <li><a href="">Actualizar</a></li>
                <li><a href="">Anular</a></li>
            </ul></li>
            <li><a href="">Domicilios</a>
            <ul>
                <li><a href="">Consultar</a></li>
                <li><a href="">Actualiza</a></li>
                <li><a href="">Asignar</a></li>
                <li><a href="">Inactivar</a></li>
                <li><a href="">Registrar entrega</a></li>
                <li><a href="">Reporte de pedidos</a></li>
      </ul></li>
         </div>
        
        </nav>
        
         <!-- ICONOS DE BUSCADOR,ORDENAR,LOGIN -->
        <div class="iconos">
            <div class="fas fa-shopping-cart" id="ordenar"></div>
            <div class="fas fa-search" id="Busqueda"></div>
        </div>
     <!-- FORMULARIO BUCADOR  -->
        <form action="" class="formu_buscador">
            <input type="search" name="" id="busqueda" placeholder="¿Que deseas buscar?">
            <label for="search-box" class="fas fa-search"></label>
        </form>
        
        <div class="action">
            <div class="profile" onclick="menuToogle();">
                <img src="../ASSETS/IMG/yo.jpg">
            </div>
            <div class="menuUser">
                <h3>
                    <?php
                    session_start();
                    print $_SESSION["usuarioactivo"];
                    ?>
                    <br><span>Freelance</span></h3>
                <ul>
                    <li><img src="../ASSETS/IMG/usuario.png"><a href="../VIEW/04(1)-Mi_perfil_admin.php">Mi Perfil</a></img></li>
    
                    <li><img src="../ASSETS/IMG/editar.png"><a href="../VIEW/04(2)-Actualizar_mi_perfil_admin.php">Editar Perfil</a></img></li>
    
                    <li><img src="../ASSETS/IMG/configuraciones.png"><a href="#">Configuraciones</a></img></li>
    
                    <li><img src="../ASSETS/IMG/preguntas.png"><a href="#">Ayuda</a></img></li>
    
                    <li><img src="../ASSETS/IMG/salir.png"><a href="../CONTROLLER/02-Salir.php" class="salir">Salir</a></img></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- FIN HEADER -->
<body>
    <h3  class="usuarios">Ver Usuarios:</h3>
    <?php
    print '<table class="prueba">';
    require_once('01-controlador.php');
    $ListarUsuario = new Model;
    $datos = $ListarUsuario->listarUsuarios();
    print '<tr>
           <th>ID</th>
           <th>Tipo de documento</th>
           <th>Numero de documento</th>
           <th>Primer Nombre</th>
           <th>Segundo Nombre</th>
           <th>Primer Apellido</th>
           <th>Segundo Nombre</th>
           <th>Direccion</th>
           <th>Telefono</th>
           <th>Correo</th>
           <th>Contraseña</th>
           <th>Estado</th>
           </tr>';
foreach ($datos as $valor){

print '<tr>';
echo "<td>". $valor['idUsuario']." </td>";
echo "<td>". $valor['tipoDocUsuario']."</td>";
echo "<td>". $valor['numdocUsuario']."</td>";
echo "<td>". $valor['nombreUsuario']."</td> ";
echo "<td>". $valor['nombre_2Usuario']."</td> ";
echo "<td>". $valor['apellidoUsuario']." </td>";
echo "<td>". $valor['apellido_2Usuario']."</td> ";
echo "<td>". $valor['direccionUsuario']."</td> ";
echo "<td>". $valor['telefonoUsuario']."</td> ";
echo "<td>". $valor['correoUsuario']."</td> ";
echo "<td>". $valor['passwordUsuario']."</td> ";
echo "<td>". $valor['estadoUsuario']."</td> ";
print '</tr>';

}
print '</table>';
?>

<footer>
    <div class="redes">
        <a href="" class="botonR">Facebook</a>
        <a href="" class="botonR">Twitter</a>
        <a href="" class="botonR">Instagram</a>
        <a href="" class="botonR">WhatsApp</a>
    </div>

    <h1 class="derechosAutor">
        Creado por <span> Joan Zamudio</span> | todos los derechos de autor reservados 
    </h1>
</footer>
  <script src="../ASSETS/JS/Funciones.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../ASSETS/JS/SweetA.js"></script>
</body>
</html>
