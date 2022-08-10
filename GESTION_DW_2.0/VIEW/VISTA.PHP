<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar</title>
</head>
<body>
    
</body>
</html>
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