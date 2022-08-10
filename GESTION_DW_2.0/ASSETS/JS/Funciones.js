// JS MENU DESPLEGABLE
let menu = document.querySelector('#menu-bar');
let barraNa = document.querySelector('.barraNa');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    barraNa.classList.toggle('active');
}
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    barraNa.classList.remove('active');
// JS SCROLL
if(window.scrollY > 60){
        document.querySelector('#scroll').classList.add('active');
    }else{
        document.querySelector('#scroll').classList.remove('active');
    }
// FIN JS SCROLL
    
}
// FIN JS MENU DESPLEGABLE

// --------------------------------------------------------------------------------
// BUSCADOR

// FIN JS BUSCADOR


// JS LOGIN
let Login = document.querySelector('');
document.querySelector('').onclick = () =>{
    Login.classList.toggle('activador');
}
// FIN JS LOGIN

// JS FUNCION DE LOGIN
function validar(){
    var usuario;
    var clave;
    
    var formato = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    
    usuario = document.getElementById('usuario').value;
    clave = document.getElementById('clave').value;
    
   
    if(usuario===""||clave===""){
        
        alert ('El correo o la contraseña no pueden quedar Vacios');
        return false;
    }
    
    else if(clave.length<8){
        alert ('su contraseña no puede ser inferior a 8 caracteres ');
        return false;
    }
    else{
        alert ('Bienvenido');
    }
    }

// FIN JS FUNCION DE LOGIN

// JS USUARIO ADMIN
function menuToogle(){
    const toogleMenu = document.querySelector('.menuUser');
    toogleMenu.classList.toggle('active');
}
// FIN JS USUARIO ADMIN

// JS LAODER
function loader(){
    document.querySelector('.loader').classList.add('ocultarse');
}
function ocultarse(){
    setInterval(loader, 2400);
}
window.onload = ocultarse();
// FIN JS LOADER







