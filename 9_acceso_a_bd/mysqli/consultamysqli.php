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
                $consulta = $mysqli->query('SELECT * FROM empleado WHERE dni = "13579"');
                $empleado = $consulta->fetch_object();
                echo "Nombre: ". $empleado->nombre ."<br>";
                echo "Cargo: ". $empleado->cargo ."<br>";
                echo "Sueldo: ". $empleado->sueldo ."<br>";
            }
        ?>
    </body>
</html>