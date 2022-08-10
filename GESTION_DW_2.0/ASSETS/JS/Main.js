// --------------------------------------------------------------------------------
// BUSCADOR
// --------------------------------------------------------------------------------
let Buscador = document.querySelector('.buscador');
document.querySelector('#buscador'). onclick = () =>{
    Buscador.classList.toggle('activador');
    carrito.classList.remove('activador');
    menu_responsive.classList.remove('activador');
}
// --------------------------------------------------------------------------------
// FIN BUSCADOR
// --------------------------------------------------------------------------------

// --------------------------------------------------------------------------------
// CARRITO
// --------------------------------------------------------------------------------
let carrito = document.querySelector('.carrito');
document.querySelector('#carrito'). onclick = () =>{
    carrito.classList.toggle('activador');
    Buscador.classList.remove('activador');
    menu_responsive.classList.remove('activador');
}
// --------------------------------------------------------------------------------
// FIN CARRITO
// --------------------------------------------------------------------------------

// --------------------------------------------------------------------------------
// USER
// --------------------------------------------------------------------------------
    const user = document.querySelector('.fas fa-user');
    document.querySelector('#user'). onclick = () =>{
        window.location.href = "../GESTION_DW_2.0/VIEW/03-InicIar_Session.html";
    }

// --------------------------------------------------------------------------------
// FIN USER
// --------------------------------------------------------------------------------

// --------------------------------------------------------------------------------
// RESPONSIVE MENU
// --------------------------------------------------------------------------------
let menu_responsive = document.querySelector('.navegacion');
document.querySelector('#menu'). onclick = () =>{
    menu_responsive.classList.toggle('activador');
    Buscador.classList.remove('activador');
    carrito.classList.remove('activador');
};
// --------------------------------------------------------------------------------
// FIN RESPONSIVE MENU
// --------------------------------------------------------------------------------

// --------------------------------------------------------------------------------
// REMOVER ICONOS
// --------------------------------------------------------------------------------
window.onscroll = () =>{
    Buscador.classList.remove('activador');
    carrito.classList.remove('activador');
    menu_responsive.classList.remove('activador');
};
// --------------------------------------------------------------------------------
// FIN REMOVER ICONOS
// --------------------------------------------------------------------------------

// --------------------------------------------------------------------------------
// FORMULARIO LOGIN
// --------------------------------------------------------------------------------
const iniciarSesionBtn = document.querySelector('.iniciarSesionBtn');
        const crearCuentaBtn = document.querySelector('.crearCuentaBtn');
        const formBx = document.querySelector('.formBx');

        crearCuentaBtn.onclick = function(){
        formBx.classList.add('activeForm');    
        }
        iniciarSesionBtn.onclick = function(){
        formBx.classList.remove('activeForm');    
        }
// --------------------------------------------------------------------------------
// FIN FORMULARIO LOGIN
// --------------------------------------------------------------------------------

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