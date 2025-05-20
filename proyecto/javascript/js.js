document.getElementById("btn__registrarse").addEventListener("click",register);
document.getElementById("btn__iniciar-sesion").addEventListener("click",iniciarSesion);
window.addEventListener("resize",anchopagina);



var formulario_login = document.querySelector(".formulario__login");
var formulario__register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

function anchopagina(){
    if (window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    }else {
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario__register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}

function iniciarSesion(){
    if (window.innerWidth > 850){
        formulario__register.style.display = "none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity=  "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario__register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display=  "block";
        caja_trasera_login.style.display = "none";
    }
}
function register (){
    if (window.innerWidth > 850){
        formulario__register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity=  "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario__register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display=  "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}


