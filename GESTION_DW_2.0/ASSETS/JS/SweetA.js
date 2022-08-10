
const Swal = require('sweetalert2');

function validar(){
    var usuario;
    var clave;
    
    var formato = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    
    usuario = document.getElementById('usuario').value;
    clave = document.getElementById('clave').value;
    
   
    if(usuario===""||clave===""){
        
        Swal.fire({
            icon: 'question',
            title: 'Debes insertar tu usuario y contraseña para acceder',
            confirmButtonText: 'De acuerdo',
            confirmButtonColor: '#215a9e'
            
          });
          
        return false;
    }
    
    else if(clave.length<8){
        Swal.fire({
            icon: 'error',
            title: 'tu contraseña no puede ser inferior a 8 caracteres',
            confirmButtonText: 'De acuerdo',
            confirmButtonColor: '#215a9e',
            timer: 3000,
            timerProgressBar: true,
          });
        return false;
    }
    else{
    //   Swal.fire({
    //     icon: 'error',
    //     title: 'tu contraseña o usuario es incorrecto, verifica',
    //     confirmButtonText: 'De acuerdo',
    //     confirmButtonColor: '#215a9e',
    //   });
    // return false;
    }
    }

    


    document.getElementByClassName('salir').addEventListener('click', function(){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
          }
    })
  })






  // algo x
  document.getElementById('sweet').addEventListener('click',function(){
    Swal.fire ('bonita y potra');
});