<?php
$coneccion = mysqli_connect("bmfyhbckcaadqoxhgca9-mysql.services.clever-cloud.com","udnkszambakftp42","RdewvWdO7TCH4knJQ2nd","bmfyhbckcaadqoxhgca9");
if($coneccion){
    echo'coneccion exitosa';
}else{
    echo'No se ha conectado';
}
?>