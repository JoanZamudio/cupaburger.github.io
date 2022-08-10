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
    <title>Cupa Burger | Actualizar Perfil</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <a href="0-Index.html" class="logo"><i class="fa-solid fa-burger"></i>Cupa Burger</a>
        <div id="menu-bar" class="fas fa-bars"></div>
         <div id="header">
      <ul class="nav">
            <li><a href="04-Perfil_Admin.php">Inicio</a></li>
            <li><a href="#Cocina Real">Validacion</a></li>
            <li><a href="#Eventos">Usuarios</a>
            <ul>
                <li><a href="">Registrar</a></li>
                <li><a href="">Actualizar perfiles</a></li>
                <li><a href="">Darse de Baja</a></li>
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
        <!-- ICONOS DE BUSCADOR,ORDENAR,LOGIN -->
        <div class="iconos">
            <div class="fas fa-shopping-cart" id="ordenar"></div>
            <div class="fas fa-search" id="Busqueda"></div>
        </div>
        <div class="action">
            <div class="profile" onclick="menuToogle();">
                <img src="../ASSETS/IMG/yo.jpg">
            </div>
            <div class="menuUser">
                <h3><?php
                    session_start();
                    print $_SESSION["usuarioactivo"];
                    ?>
                    <br><span>Freelance</span></h3>

                <ul>
                    <li><img src="../ASSETS/IMG/usuario.png"><a href="04(1)-Mi_perfil_admin.php">Mi Perfil</a></img></li>
    
                    <li><img src="../ASSETS/IMG/editar.png"><a href="04(2)-Actualizar_mi_perfil_admin.php">Editar Perfil</a></img></li>
    
                    <li><img src="../ASSETS/IMG/configuraciones.png"><a href="#">Configuraciones</a></img></li>
    
                    <li><img src="../ASSETS/IMG/preguntas.png"><a href="#">Ayuda</a></img></li>
    
                    <li><img src="../ASSETS/IMG/salir.png"><a href="../CONTROLLER/02-Salir.php">Salir</a></img></li>
                </ul>
            </div>
        </div>
    </header>
    
    <?php
        require_once('../CONTROLLER/01-controlador.php');
    $admin = new Model;        
    foreach ($admin->micuenta($_SESSION['idActivo']) as $reg=>$valor){
    ?>

    <div id="DATOS">
    <form action="../MODEL/Actualizar_datos_Admin.php" method="POST" id="formcuenta">
    <h3>Actualizar Perfil</h3>
    
    <label for="name">Tipo de documento: </label>
    <input type="text" name="tipoDocUsuario" value="<?php echo $valor['tipoDocUsuario'];?>" id="dos2"><br>
    <label for="name">Direccion: </label>
    <input type="text" name="direccionUsuario" value="<?php echo $valor['direccionUsuario'];?>" id="tres3"><br>
    <label for="name">Telefono: </label>
    <input type="text" name="telefonoUsuario" value="<?php echo $valor['telefonoUsuario'];?>" id="cuatro4"><br>  
    <label for="name">Correo: </label>
    <input type="text" name="correoUsuario" value="<?php echo $valor['correoUsuario'];?>" id="cinco5"><br>  
    <label for="name">Contraseña: </label>
    <input type="text" name="passwordUsuario" value="<?php echo $valor['passwordUsuario'];?>" id="seis6"><br>  

    <button type="submit" class="Actualizarbtn" id="Actualizarbtn">Actualizar</button><br>
    <script>
    document.getElementById('Actualizarbtn').addEventListener('click',function(){
    Swal.fire ({
        icon: 'success',
        title: 'Datos actualizados correctamente',
        confirmButtonText: 'Genial!',
        confirmButtonColor: '#215a9e',
        timer: 3000,
        timerProgressBar: true,
     });
});
    </script>
    
</form>
</div>
<?php
}
?>


<!-- FOOTER -->
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
<!-- FIN FOOTER -->

<!-- BOTON DE PAGINA -->
<a href="#inicio" class="fas fa-angle-up" id="scroll"></a>
<!-- FIN DE BOTON DE PAGINA -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>