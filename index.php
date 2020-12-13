<?php
/*session_start();
if(isset($_SESSION['usuario'])){
   header("location: menu.php");
}*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Proyect Final</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <LINK REL=StyleSheet HREF="acesos/css/estilo.css" TYPE=" " MEDIA=screen>
</head>
<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera_login">
                    <h3>Ya tienes Cuenta!!!</h3>
                    <p>Inicia tu Cuenta Para ver tus Opciones</p>
                    <button id="btn_iniciar_seccion">Ingresa</button>
                </div>
                <div class="caja__trasera_registro">
                    <h3>Aun no Tienes Cuenta?</h3>
                    <p>Favor Registrate para iniciar y pertenecer</p>
                    <button id="btn_iniciar_registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contedor__login_registro">
                <form action="php/login_usuario_be.php" method = "POST" class="formulario__login">
                    <h2>Iniciar Seccion</h2>
                    <input type="text" placeholder="usuario" name="usuario">
                    <input type="password" placeholder="Clave" name="clave">
                    <button>Iniciar</button>
                </form>
                <form action="php/registro_usuario_be.php" method= "POST" class="formulario__registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Clave" name="clave">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="acesos/JS/script.js"></script>
</body>
</html>