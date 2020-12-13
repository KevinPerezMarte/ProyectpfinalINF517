<?php
include'coneccion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave = hash('sha512',$clave);

$query = "INSERT INTO user(nombre_completo, correo, usuario, clave) 
          VALUES('$nombre_completo', '$correo', '$usuario', '$clave')";

$verificar_correo = mysqli_query($coneccion,"SELECT * FROM user WHERE correo = '$correo' ");
if (mysqli_num_rows($verificar_correo) > 0 ){
  echo'
  <script>
  alert("Correo Registrado Intenta con otro");
  window.location ="../";
  </script>
  ';
  exit();
}
$verificar_usuario = mysqli_query($coneccion,"SELECT * FROM user WHERE usuario = '$usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0 ){
  echo'
  <script>
  alert("Usuario Registrado Intenta con otro");
  window.location ="../";
  </script>
  ';
  exit();
}


$ejecutar = mysqli_query($coneccion, $query);
if($ejecutar){
  echo'
  <script>
  alert("Usuario Registrado Exitosamente");
  window.location ="../";
  </script>
   ';
 }else{
   echo'
   <script>
   alert("Hubo un error");
   window.location ="../";
  </script>
  ';
 }
  mysqli_close($coneccion);

?>