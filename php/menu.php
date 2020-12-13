<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Usuario no Ingresado");
    window.location = "../";
    </script>
    ';
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Kevin Perez CH-7317-->
    <!--proyecto Final -->
    <meta charset="iso-8859-1">
    <title>Menu Administradores </title>
    <LINK REL=StyleSheet HREF="../acesos/css/estilomenu.css" TYPE=" " MEDIA=screen>
    </head>
    <body>
    <header>
      <nav>
        <ul class="nav">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Practicas</a>
          <ul>
            <li><a href="https://kevinperezmarte.github.io/biografiaCH7317/">Practica 1</a></li>
            <li><a href="https://kevinperezmarte.github.io/Proyecto/">Practica 2</a></li>
            <li><a href="https://kevinperezmarte.github.io/MenuBanReservas/">Practica 3</a></li>
            <li><a href="https://kevinperezmarte.github.io/ValidacionCedula/">Practica 4</a></li>
            <li><a href="https://kevinperezmarte.github.io/MenuJSON/">Practica 5</a></li>
            <li><a href="https://kevinperezmarte.github.io/GnereadorQR/">Practica 6</a></li>
            <li><a href="https://kevinperezmarte.github.io/Tabs/">Practica 7</a></li>
            <li><a href="https://kevinperezmarte.github.io/grafico/ ">Practica 8</a></li>
            <li><a href="https://modulo10.herokuapp.com/">Practica 9</a></li>
          </ul></li>
          <li><a href="cerrar_se.php">Cerrar Seccion</a></li>
        </ul>
      </nav>
    </header>
        <div class="section" id="contacts">
            <h1><span>Sigeme En:</span></h1>
            <div>
                <a href="https://www.sololearn.com/Profile/9613328" target="_blank">
                    <img alt="SoloLearn" src="https://www.sololearn.com/Uploads/icons/sololearn.png" height="100" width="100"/>
                </a>
                <a href=" https://www.instagram.com/kevinperezmarte/">
                    <img alt="instagram" src="../acesos/imagen/pngwing.com (1).png" height="100" width="100"/>
                </a>
                <a href="https://twitter.com/SociedadRD">
                    <img alt="Twitter" src="https://www.sololearn.com/Uploads/icons/twitter.png" height="100" width="100"/>
                </a>
                <a href="https://www.youtube.com/channel/UC4wFXwDPJFPzQvvaw5B57tg?view_as=subscriber">
                    <img alt="youtube" src="../acesos/imagen/pngwing.com.png" height="100" width="100"/>
                </a>
            </div>
        </div>
    <footer>
        <div class="copyright">
            &copy; <b>2020 Materia INF-517. All rights reserved for Kevin Perez.</b>
        </div>
    </footer>
    <script src=""></script>

    </body>
</html>