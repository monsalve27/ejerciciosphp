<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $mysqli = new mysqli("localhost","root","","banco"); 
            if($mysqli->connect_errno){
                 echo "Falló al conectar a MySQL: (" .  $mysqli->connect_errno . ") " .$mysqli->connect_error;
            } else {
                $mysqli->set_charset("utf8");
                $consulta = $mysqli->query('SELECT dni, nombre, direccion, telefono FROM cliente');
            }
        ?> 
        <h2>Base de datos <u>Banco</u> Listado de Clientes</h2>
        <table>
            <tr>
                <th><b>DNI</b></th>
                <th><b>Nombre</b></th>
                <th><b>Dirección</b></th>
                <th><b>Teléfono</b></th>
            </tr>
            <?php
               /* while($row=mysqli_fetch_array($consulta)){
            ?>
                    <tr>
                        <td><?= $row['dni'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['direccion'] ?></td>
                        <td><?= $row['telefono'] ?></td>
                    </tr>
            <?php
                } */
                while($ciente=$consulta->fetch_object()){
            ?>
                    <tr>
                        <td><?= $ciente->dni ?></td>
                        <td><?= $ciente->nombre ?></td>
                        <td><?= $ciente->direccion ?></td>
                        <td><?= $ciente->telefono ?></td>
                    </tr>
            <?php
                }
            ?>
        </table>       
    </body>
</html>