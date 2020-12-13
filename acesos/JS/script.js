document.getElementById("btn_iniciar_registrarse").addEventListener("click",registro);
document.getElementById("btn_iniciar_seccion").addEventListener("click",login);
window.addEventListener("resize", anchoPagina);

var contedor__login_registro = document.querySelector(".contedor__login_registro");
var formularioLogin = document.querySelector(".formulario__login");
var formularioRegistro = document.querySelector(".formulario__registro");
var caja__trasera_login = document.querySelector(".caja__trasera_login");
var caja__trasera_registro = document.querySelector(".caja__trasera_registro");

function anchoPagina(){
    if(window.innerWidth > 850){
        caja__trasera_login.style.display ="block";
        caja__trasera_registro.style.display ="block";
    }else{
        caja__trasera_registro.style.display="block";
        caja__trasera_registro.style.opacity="1";
        caja__trasera_login.style.display="none";
        formularioLogin.style.display="block";
        formularioRegistro.style.display="none";
        contedor__login_registro.style.left="0px";
    }
}
anchoPagina();
function login(){
    if(window.innerWidth > 850){
    formularioRegistro.style.display = "none";
    contedor__login_registro.style.left ="10px";
    formularioLogin.style.display="block";
    caja__trasera_registro.style.opacity="1";
    caja__trasera_login.style.opacity="0";
}else{
    formularioRegistro.style.display = "none";
    contedor__login_registro.style.left ="0px";
    formularioLogin.style.display="block";
    caja__trasera_registro.style.display="block";
    caja__trasera_login.style.display="none";
}
}
function registro(){
    if(window.innerWidth > 850){
    formularioRegistro.style.display = "block";
    contedor__login_registro.style.left ="490px";
    formularioLogin.style.display="none";
    caja__trasera_registro.style.opacity="0";
    caja__trasera_login.style.opacity="1";
}else{
    formularioRegistro.style.display = "block";
    contedor__login_registro.style.left ="0px";
    formularioLogin.style.display="none";
    caja__trasera_registro.style.display="none";
    caja__trasera_login.style.display="block";
    caja__trasera_login.style.opacity ="1";
}
}