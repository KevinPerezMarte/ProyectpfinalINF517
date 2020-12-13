<?php
session_start();
include 'coneccion_be.php';

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave = hash('sha512', $clave);
$admin ='admin';

$validar_login = mysqli_query($coneccion,"SELECT * FROM user WHERE usuario = '$usuario' and clave = '$clave'");

if((mysqli_num_rows($validar_login) > 0) && ($usuario == $admin)){
    $_SESSION['usuario'] = $usuario;
    header("location: menu.php");
    exit;
}
else if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $usuario;
    header("location: menuusuario.php");
    exit;
}else{
    echo'
    <script>
    alert("Usuario no Existe, Verifique los Datos");
    window.location = "../";
    </script>';
    exit;
}
?>