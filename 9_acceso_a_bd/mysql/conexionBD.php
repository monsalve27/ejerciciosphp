<?php
    $conexion = mysql_connect("localhost","root","");
    if($conexion){
        echo "Se ha establecido una conexión con el servidor de base de datos.";
    } else {
        echo "No se ha podido establecer conexión con el servidor de bases de datos";
    }
?>