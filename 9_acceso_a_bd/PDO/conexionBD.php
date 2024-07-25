<?php   
    try{
        $conexion = new PDO("mysql:host=localhost","root","");
        echo "Se ha establecido una conexión con el servidor de bases de datos.<br>";
    } catch (PDOException $e){
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die("Error: ".$e->getMessage());
    }
?>