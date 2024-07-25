<?php 
    //include 'conexionBD.php';
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8","root","");
    } catch(PDOException $e){
        echo "No se ha podido etablecer conexión con el servidor de bases de datos.<br>";
        die("Error: ".$e->getMessage());
    }
    $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h2>Base de datos <u>Banco</u> Listado de Clientes</h2>
        <table border="1">
            <tr>
                <th><b>DNI</b></th>
                <th><b>Nombre</b></th>
                <th><b>Dirección</b></th>
                <th><b>Teléfono</b></th>
            </tr>
            <?php 
                while($cliente=$consulta->fetchObject()){
             ?>
                    <tr>
                        <td><?= $cliente->dni ?></td>
                        <td><?= $cliente->nombre ?></td>
                        <td><?= $cliente->direccion ?></td>
                        <td><?= $cliente->telefono ?></td>
                    </tr>
            <?php
                }
            ?>
        </table>   
        <br>
        Número de clientes: <?= $consulta->rowCount() ?>  <a href="formularioCliente.php">Nuevo Cliente</a>
    </body>
</html>    