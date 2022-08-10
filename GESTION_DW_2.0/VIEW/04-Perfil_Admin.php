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
    <link rel="stylesheet" href="../ASSETS/CSS/Melo.css">
    <title>Cupa Burger | Bienvenido</title>
</head>
<body>
    <div class="menu_nav">
        <div class="navAdmin">
        <ul>
            <li>
                <a href="04-Perfil_Admin.php">
                    <span class="iconos_nav"><i class="fa-solid fa-burger"></i></span>
                    <span class="titulo_nav">Bienvenido
                        <?php
                        session_start();
                        print $_SESSION["usuarioactivo"];
                        ?>
                    </span>
            </li>
            <li>
                <a href="04-Perfil_Admin.php">
                    <span class="iconos_nav"><i class="fa-solid fa-house"></i></span>
                    <span class="titulo_nav">Inicio</span>
                </a>
            </li>
            <li>
                <a href="04(2)-Validacion_Admin.html">
                    <span class="iconos_nav"><i class="fa-solid fa-list-check"></i></i></span>
                    <span class="titulo_nav">Validacion</span>
                </a>
            </li>
            <li>
                <a href="04(3)-Usuarios_Admin.html">
                    <span class="iconos_nav"><i class="fa-solid fa-users"></i></span>
                    <span class="titulo_nav">Usuarios</span>
                </a>
            </li>
            <li>
                <a href="04(4)-Productos_Admin.html">
                    <span class="iconos_nav"><i class="fa-solid fa-utensils"></i></span>
                    <span class="titulo_nav">Productos</span>
                </a>
            </li>
            <li>
                <a href="04(5)-Pedidos_Admin.html">
                    <span class="iconos_nav"><i class="fa-solid fa-arrow-down-short-wide"></i></span>
                    <span class="titulo_nav">Pedidos</span>
                </a>
            </li>
            <li>
                <a href="04(6)-Domicilios_Admin.html">
                    <span class="iconos_nav"><i class="fa-solid fa-motorcycle"></i></span>
                    <span class="titulo_nav">Domicilios</span>
                </a>
            </li>
            <li>
                <a href="../CONTROLLER/02-Salir.php">
                    <span class="iconos_nav"><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span class="titulo_nav">salir</span>
                </a>
            </li>
        </ul>
        <div class="toggle"></div>
   </div>
    <!-- menu admin -->
    <div class="menuAdmin">
        <div class="topbar">
            <div class="toogle">
                <i class="fa-solid fa-cubes-stacked"></i>
            </div>
            <!-- buscador ajax -->
            <div class="buscadorAdmin">
                <label for="">
                    <input type="text" name="" id="" placeholder="Busca aqui...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
            </div>
            <!-- usuario img -->
            <div class="admin">
                <img src="../ASSETS/IMG/yo.jpg" alt="">
        </div>
    </div>
    <div class="tituloAccion">
    <h3>!Bienvenido nuevamente 
    <?php
    print $_SESSION["usuarioactivo"]; 
?>! <br> ¿Que deseas hacer hoy?
    </h3>
        </div>
    </div>

    <script>
        // menuToggle
        let toggle = document.querySelector('.toogle');
        let navAdmin = document.querySelector('.navAdmin');
        let menuAdmin = document.querySelector('.menuAdmin');
        let tituloAccion = document.querySelector('.tituloAccion');

        toggle.onclick = function(){
            navAdmin.classList.toggle('active');
            menuAdmin.classList.toggle('active');
            tituloAccion.classList.toggle('active');
        }
        // mantener el hover
        let list = document.querySelectorAll('.navAdmin li');
        function activelink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activelink))
    </script>
</body>
</html>
     
        <!--  
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
                    <li><img src="../ASSETS/IMG/usuario.png"><a href="04(1)-Mi_perfil_admin.php">Mi Perfil</a></img></li>
    
                    <li><img src="../ASSETS/IMG/editar.png"><a href="04(2)-Actualizar_mi_perfil_admin.php">Editar Perfil</a></img></li>
    
                    <li><img src="../ASSETS/IMG/configuraciones.png"><a href="#">Configuraciones</a></img></li>
    
                    <li><img src="../ASSETS/IMG/preguntas.png"><a href="#">Ayuda</a></img></li>
    
                    <li><img src="../ASSETS/IMG/salir.png"><a href="../CONTROLLER/02-Salir.php" class="salir">Salir</a></img></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- FIN HEADER -->

<!-- FOOTER 
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
</footer> -->
<!-- FIN FOOTER -->

<!-- BOTON DE PAGINA -->
<!-- <a href="#inicio" class="fas fa-angle-up" id="scroll"></a> -->
<!-- FIN DE BOTON DE PAGINA -->
    <!-- JS -->
    <script src="../ASSETS/JS/Funciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="ASSETS/JS/SweetA.js"></script>
</body>
</html>